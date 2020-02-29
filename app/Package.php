<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PackageDetail;

class Package extends Model
{
    protected $table = "package";

    protected $fillable = [
        'id',
        'name',
        'package_id',
        'TrackingNumber',
        'date_received',
        'date_created',
        'date_updated'
    ];

    public function detail()
    {
        return $this->hasMany(PackageDetail::class, 'package_id', 'package_id');
    }
}
