<?php
namespace App\Models;
    
use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'product_id',
        'rating',
        'text',
        'user_id'
    ];

    // Join with products table to get product details
    public function getReviewWithProduct($id = null)
    {
        $builder = $this->select('reviews.product_id, reviews.rating, reviews.text, reviews.created_at, products.product_name, users.username')
                       ->join('products', 'products.product_id = reviews.product_id')
                       ->join('users', 'users.user_id = reviews.user_id');
        
        if ($id !== null) {
            return $builder->find($id);
        }
        
        return $builder->findAll();
    }

    public function getLatestReviews($limit = 5)
    {
        return $this->select('reviews.*, products.product_name, products.brand, users.username')
                    ->join('products', 'products.product_id = reviews.product_id')
                    ->join('users', 'users.user_id = reviews.user_id')
                    ->orderBy('reviews.created_at', 'DESC')
                    ->limit($limit)
                    ->findAll();
    }

    public function getReviewById($id)
    {
        return $this->select('reviews.*, products.product_name, products.brand, users.username')
                    ->join('products', 'products.product_id = reviews.product_id')
                    ->join('users', 'users.user_id = reviews.user_id')
                    ->where('reviews.id', $id)
                    ->first();
    }

    public function getTopRated($limit = 5)
    {
        return $this->select('reviews.*, products.product_name, products.brand, users.username')
                    ->join('products', 'products.product_id = reviews.product_id')
                    ->join('users', 'users.user_id = reviews.user_id')
                    ->orderBy('reviews.rating', 'DESC')
                    ->limit($limit)
                    ->findAll();
    }

    public function saveReview($data)
    {
        return $this->insert($data);
    }
}