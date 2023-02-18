<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property string $title
 * @property int $price
 * @property int $article
 * @property int $category_id
 * @property int $rating
 * @property int $discount
 * @property int $purchase_price
 * @property int $quantity
 * @property array $images
 * @property string $description
 *
 * Class Product
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'article',
        'title',
        'price',
        'category_id',
        'images',
        'description',
        'purchase_price',
        'discount',
        'rating',
        'quantity'
    ];

    protected $casts = [
        'images' => 'array'
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsToMany
     */
    public function filters(): BelongsToMany
    {
        return $this->belongsToMany(Filter::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
