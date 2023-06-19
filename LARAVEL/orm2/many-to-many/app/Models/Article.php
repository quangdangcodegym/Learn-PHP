<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = ['title', 'short_intro', 'content', 'category_id', 'author_id'];
    
    function category(){
        // public function belongsTo($related,$foreignKey = null,$ownerKey = null,$relation = null
        // ownerKey: tên cột khóa chính
        return $this->belongsTo(Category::class, 'category_id');
    }
    function tags(){
        return $this->belongsToMany(Tag::class,'article_tag', 'article_id', 'tag_id');
    }
}
