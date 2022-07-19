<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(mixed $data)
 * @method static count()
 * @method static whereFulfillmentStatus(string $string)
 * @method static whereFinancialStatus(string $string)
 */
class Order extends Model
{

    use HasFactory;
    protected $guarded = [];
}
