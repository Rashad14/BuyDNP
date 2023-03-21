<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_PENDING = 'pending';
    const STATUS_PROCESSING = 'processing';
    const STATUS_COMPLETED = 'completed';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function order_products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public static function getStatusConstants()
    {
        return [
            'STATUS_PENDING' => self::STATUS_PENDING,
            'STATUS_PROCESSING' => self::STATUS_PROCESSING,
            'STATUS_COMPLETED' => self::STATUS_COMPLETED,
        ];
    }
}
