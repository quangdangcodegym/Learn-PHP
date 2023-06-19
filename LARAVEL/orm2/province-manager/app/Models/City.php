<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';

    function customers(){
        return $this->hasMany(Customer::class, 'city_id');
    }
    
    /**
    city.customers      => eager, lấy trước
    city.customers      => lazy: gọi mới lấy - Transactional 
    (ra khỏi transactional báo lỗi throw)
     */
}
