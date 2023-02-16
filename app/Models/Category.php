<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property int $parent_id
 *
 * Class Category
 * @package App\Models
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
    ];

    /**
     * @return HasMany
     */
    public function childrens(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
