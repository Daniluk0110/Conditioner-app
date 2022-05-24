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

    public function getRubelPriceAttribute(): string
    {
        $rubelExchangeRate = ExchangeRate::where('currency', 'BYN')->first();
        return number_format($this->usd_price * $rubelExchangeRate->value, 2, '.', ' ');
    }
}
