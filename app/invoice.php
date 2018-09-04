<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class invoice extends Model
{
    protected $fillable =['subject', 'invoice_date','due_date','terms_Condition','total','discount','net_total','status'];
}
