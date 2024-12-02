<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function view($productId)
    {
        $productModel = new ProductModel();
        $data['product'] = $productModel->find($productId);
        $data['reviews'] = $productModel->getProductReviews($productId);

        return view('product_view', $data);
    }
    
    public function showcase()
    {
        $model = new ProductModel();
        return view('product_showcase', ['products' => $model->findAll()]);
    }
}