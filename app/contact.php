<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable =['owner_name', 'business_name','business_phone','contact_address'];

    protected $primaryKey = 'contact_id';

}
