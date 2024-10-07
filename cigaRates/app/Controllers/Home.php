<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Home extends BaseController
{
    protected $reviewModel;

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
    }

    public function index()
    {
        $data['latest_reviews'] = $this->reviewModel->orderBy('created_at', 'DESC')
                                                    ->limit(5)
                                                    ->findAll();
        $data['top_rated'] = $this->reviewModel->orderBy('rating', 'DESC')
                                               ->limit(5)
                                               ->findAll();
        
        return view('home', $data);
    }

    public function about()
    {
        return view('about');
    }
}