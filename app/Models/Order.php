<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(mixed $data)
 * @method static count()
 */
class Order extends Model
{

    use HasFactory;
    protected $guarded = [];
}