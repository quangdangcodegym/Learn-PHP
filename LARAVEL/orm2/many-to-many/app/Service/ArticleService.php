<?php
namespace App\Service;

use App\Models\Article;

class ArticleService{
    public function getAllArticles(){
        $articles = Article::all();
        
        return $articles;
    }

}

