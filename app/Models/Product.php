<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function company()
    {
        $this->hasOne(Company::class);
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
