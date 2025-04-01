<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id', 'quantity', 'total_price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function totalSales($startDate, $endDate)
    {
        return Order::whereBetween('created_at', [$startDate, $endDate])
                    ->sum('total_price');
    }
}
