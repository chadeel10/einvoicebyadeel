<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable =['payment_amount', 'payment_received','payment_remaining','payment_remarks'];

    protected $primaryKey = 'payment_id';
}
