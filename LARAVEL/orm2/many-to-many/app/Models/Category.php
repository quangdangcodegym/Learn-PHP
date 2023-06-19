<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public $timestamps = true;

    function articles(){
        //public function hasMany($related, $foreignKey = null, $localKey = null) { }
        // localKey: tên cột khóa chính, foreignKey: tên cột khóa ngoại
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
