<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['order_number','currency','additional_details','delivery_cost','amount'];
}
