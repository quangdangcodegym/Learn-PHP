<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Support\Facades\Log;
use App\Service\ArticleService;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    private $articleService;
    public function __construct()
    {
        $this->articleService = new ArticleService();
    }
    function index(){

        // $article = new Article();
        // $article->title = '3 chàng ngốc';
        // $article->content = 'nội dung..';
        // $article->author_id = 1;
        // $article->category_id = 3;

        // $article->save();

        // $a = Article::findOrFail(1);
        // DD($a->category);

        
        // $a = Article::findOrFail(1);
        // $a->tags()->attach(3);

        // echo 'them article_tag';

        // $a = Tag::findOrFail(3);
        // $a->articles()->attach(4);
        // return view('articles.index', compact());
        
        $articles = $this->articleService->getAllArticles();
        return view('articles.index', compact('articles'));
    }

    function create(){
        
        $categories = Category::all();
        $authors = Author::all();

        Log::info("categories", ['categories' => $categories]);

        return view('articles.create', compact('categories', 'authors' ));
    }

    function store(Request $request){
        $rules = [
            'title' => 'required|min:5|max:255',
            'short_intro' => 'required|min:1|max:255',
            'category_id' => 'integer',
            'author_id' => 'integer',
        ];
        // Có thể đưa :min số kí tự ra ngoài view bằng :min . Đưa attribute cũng thế
        // $message = ['title.required'=> 'Tiêu đề là bắt buộc',
        //             'title.min'=> 'Phải hơn :min kí tự',
        //             'short_intro.required' => ':attribute là bắt buộc, từ 1-255 kí tự'
        //             ];
        $message = [
                    'required'=> 'Trường :attribute là bắt buộc',
                    'min'=> 'Trường :attribute hơn :min kí tự',
                    'short_intro.required' => ':attribute là bắt buộc, từ 1-255 kí tự',
                    'integer' => 'Trường :attribute phải là số'
                    ];
        // Cách 2: để kiểm tra các rule 
        $validatedData = $request->validate($rules, $message);

        $article = new Article();
        $article->title = $request->title;
        $article->short_intro = $request->short_intro;
        $article->category_id = $request->category_id;
        $article->author_id = $request->author_id;
        $article->slug = $request->slug;
        $article->content = $request->content;

        $article->save();


        $categories = Category::all();
        $authors = Author::all();

        $message = 'Thêm thành công';
        return view('articles.create', compact('categories', 'authors', 'message' ));
    }

    function edit($id){
        // Log::channel('post_history')->info('vvvvvvvvvvvv');
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('articles.edit', compact('article', 'categories', 'authors'));
    }
    function update(ArticleRequest $request){
        
    }
}
