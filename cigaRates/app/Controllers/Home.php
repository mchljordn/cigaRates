<?php

namespace App\Controllers;

use App\Models\ReviewModel;
use App\Models\ProductModel;

class Home extends BaseController
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
        $data = array_merge($this->data, [
            'latest_reviews' => $this->reviewModel->getLatestReviews(6),
            'random_cigarettes' => $this->productModel->orderBy('RAND()')->limit(10)->findAll()
        ]);

        return view('home', $data);
    }

    public function about()
    {
        $this->data['title'] = 'About CigaRates';
        return view('about', $this->data);
    }
}