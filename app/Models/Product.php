<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'quantity', 'image', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function rules()
    {
        return [
            'name' => 'required|unique:products,name|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
