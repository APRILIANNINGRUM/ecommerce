<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //relasi ke tabel city
    public function city()
    {
        return $this->hasMany(City::class);
    }
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
