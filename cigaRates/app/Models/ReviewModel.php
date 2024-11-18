<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_id', 'rating', 'review', 'created_at'];
    protected $useTimestamps = true;
}