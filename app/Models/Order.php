<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $phone
 * @property array $data
 *
 * Class Order
 * @package App\Models
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'data',
      'phone'
    ];
}
