<?php

namespace App\Controllers;

use App\Models\ReviewModel;
use App\Models\ProductModel;

class Review extends BaseController
{
    protected $reviewModel;

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
    }

    public function index()
    {
        $data['reviews'] = $this->reviewModel->findAll();
        return view('review_list', $data);
    }

    public function store()
    {
        $reviewModel = new ReviewModel();

        $data = [
            'product_id' => $this->request->getPost('product_id'),
            'rating'     => $this->request->getPost('rating'),
            'review'     => $this->request->getPost('review'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $reviewModel->save($data);

        return redirect()->to('/review')->with('message', 'Review berhasil ditambahkan.');
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'product_name' => $this->request->getPost('product_name'),
                'review' => $this->request->getPost('review'),
                'rating' => $this->request->getPost('rating'),
            ];

            $this->reviewModel->insert($data);
            return redirect()->to('/review');
        }

        return view('review_form');
    }
}