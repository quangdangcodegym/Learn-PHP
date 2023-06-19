<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    public $timestamps = true;
    protected $fillable = ['name'];

    public function articles(){
        return $this->belongsToMany('\App\Models\Article','article_tag', 'tag_id', 'article_id');
    }


}
