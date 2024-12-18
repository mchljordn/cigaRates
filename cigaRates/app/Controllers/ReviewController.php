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
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin')->with('msg', 'Please login to view your reviews.');
        }

        $userId = session()->get('id');
        $data['reviews'] = $this->reviewModel->getReviewsByUser($userId);
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

    public function insertReview($productId = null)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin')->with('msg', 'Please login to add a review.');
        }

        $productId = $this->request->getPost('product_id');
        $userId = session()->get('id');
        
        if ($this->reviewModel->hasUserReviewed($userId, $productId)) {
            return redirect()->back()->with('error', 'You have already reviewed this product.');
        }

        $data = [
            'product_id' => $productId,
            'user_id' => $userId,
            'rating' => $this->request->getPost('rating'),
            'text' => $this->request->getPost('review')
        ];

        $this->reviewModel->insert($data);
        return redirect()->to('/review')->with('message', 'Review added successfully');
    }

    public function createForm($productId = null)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin')->with('msg', 'Please login to create a review.');
        }

        $userId = session()->get('id');

        if ($productId) {
            $existingReview = $this->reviewModel->getReviewByUserAndProduct($userId, $productId);
            if ($existingReview) {
                return redirect()->to('/review/edit/' . $existingReview['id'])
                    ->with('message', 'You have already reviewed this product. You can edit your review here.');
            }
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

    public function edit($id)
    {
        $review = $this->reviewModel->getReviewById($id);

        if (!$review || $review['user_id'] != session()->get('id')) {
            return redirect()->to('/review')->with('error', 'You cannot edit this review');
        }

        $data = [
            'review' => $review,
            'title' => 'Edit Review'
        ];

        return view('review_edit', $data);
    }

    public function update($id)
    {
        $review = $this->reviewModel->find($id);

        if (!$review || $review['user_id'] != session()->get('id')) {
            return redirect()->to('/review')->with('error', 'You cannot edit this review');
        }

        $data = [
            'rating' => $this->request->getPost('rating'),
            'text' => $this->request->getPost('review')
        ];

        $this->reviewModel->updateReview($id, $data);
        return redirect()->to('/review')->with('message', 'Review updated successfully');
    }

    public function delete($id)
    {
        $review = $this->reviewModel->find($id);

        if (!$review || $review['user_id'] != session()->get('id')) {
            return redirect()->to('/review')->with('error', 'You cannot delete this review');
        }

        $this->reviewModel->deleteReview($id);
        return redirect()->to('/review')->with('message', 'Review deleted successfully');
    }
}