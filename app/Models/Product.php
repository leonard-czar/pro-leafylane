<?php

namespace App\Models;

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function ProductCategories()
    {
        return $this->belongsTo(ProductCategoryController::class);
    }
}
