<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $allowedFields = ['product_name', 'description', 'image'];

    public function getProductReviews($productId)
    {
        return $this->db->table('reviews')
                        ->select('reviews.*, users.username')
                        ->join('users', 'users.user_id = reviews.user_id')
                        ->where('product_id', $productId)
                        ->get()
                        ->getResultArray();
    }
}