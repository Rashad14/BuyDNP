<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Category;

class Product extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'separator' => '-',
                //'maxLength' => 50,
                'unique' => true,
                'onUpdate' => true,
                //'method' => null,
                //'reserved' => null,
                //'language' => 'en',
                //'includeTrashed' => false,
                'generateSlugsOnCreate' => true,
                'generateSlugsOnUpdate' => true,
                //'slugEngineOptions' => [],
            ]
        ];
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = $value * 100;
    }

    public function getPriceAttribute($value)
    {
        return number_format($value / 100, 2);
    }
}
