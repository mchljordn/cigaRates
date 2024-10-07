<?php

namespace App\Controllers;

use App\Models\ReviewModel;

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