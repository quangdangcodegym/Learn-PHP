<?php

    class ArticleDTO{
        public $id;
        public $title;
        public $short_intro;
        public $content;  
        public $slug;
        public $category_id;
        public $author_id;
        public $category;
        public $author;

        public function __construct($id, $title, $short_intro, $content, 
        $slug, $category_id, $category, $author_id,  $author){
            $this->id = $id;
            $this->title = $title;
            $this->short_intro = $short_intro;
            $this->content = $content;
            $this->slug = $slug;
            $this->category = $category;
            $this->category_id = $category_id;
            $this->author = $author;
            $this->author_id = $author_id;
        }
    }