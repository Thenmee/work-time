<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Shetabit\Visitor\Traits\Visitable;

class compnyInfo extends Model
{
    protected $table = "compnyinfo";

    protected $fillable = [
        'company_id',
        'user_id',
        'logo',
        'companyName',
        'websitelink',
        'email',
        'phone',
        'country',
        'city',
        'address',
        'aboutCompany',
        'size',
        'type',
        'founded',
        'industry',
        'active',
        'description',
    ];
}
