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

    public function saveReview($data)
    {
        return $this->insert($data);
    }

    public function getReviewsByUser($userId)
    {
        return $this->select('reviews.*, products.product_name, users.username')
                    ->join('products', 'products.product_id = reviews.product_id')
                    ->join('users', 'users.user_id = reviews.user_id')
                    ->where('reviews.user_id', $userId)
                    ->findAll();
    }

    public function hasUserReviewed($userId, $productId)
    {
        return $this->where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->countAllResults() > 0;
    }

    public function updateReview($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteReview($id)
    {
        return $this->delete($id);
    }

    public function getReviewByUserAndProduct($userId, $productId)
    {
        return $this->where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->first();
    }
}