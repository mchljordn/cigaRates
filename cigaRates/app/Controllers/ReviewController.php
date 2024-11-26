<?php
namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\ReviewModel;


class ReviewController extends BaseController
{
    protected $reviewModel;
    protected $productModel;

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['reviews'] = $this->reviewModel->getReviewWithProduct();
        return view('review_list', $data);
    }

    public function showcase()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('product_showcase', $data);
    }

    public function show($id = null)
    {
        if ($id === null) {
            return redirect()->to('/review');
        }

        $data['review'] = $this->reviewModel->getReviewById($id);
        
        if (!$data['review']) {
            return redirect()->to('/review')->with('error', 'Review not found');
        }

        $data['title'] = 'Review Detail';
        return view('review_detail', $data);
    }

    public function insertReview($productId = null){
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin')->with('msg', 'Please login to create a review.');
        }
        $data = [
            'product_id' => $this->request->getPost('product_id'),
            'user_id' => session()->get('id'),
            'rating' => $this->request->getPost('rating'),
            'text' => $this->request->getPost('review')
        ];

            $this->reviewModel->insert($data);
            return redirect()->to('/review')->with('success', 'Review added successfully');
    }

    public function createForm($productId = null)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin')->with('msg', 'Please login to create a review.');
        }

        $selectedProduct = null;
        if ($productId) {
            $selectedProduct = $this->productModel->find($productId);
        }

        $data = [
            'products' => $this->productModel->findAll(),
            'title' => 'Create Review',
            'selectedProduct' => $selectedProduct
        ];

        return view('review_form', $data);
    }
}