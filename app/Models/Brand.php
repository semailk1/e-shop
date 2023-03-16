<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property string $logo
 *
 * Class Brand
 * @package App\Models
 */
class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
