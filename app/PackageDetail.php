<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageDetail extends Model
{
    protected $table = 'package_detail';

    protected $fillable = [
        'name',
        'package_id',
        'price',
        'qty',
        'weight',
        'date_created',
        'date_updated'
    ];
}
