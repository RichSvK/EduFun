<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Writer;

class ArticleController extends Controller
{
    public function viewArticle($id){
        $article = Article::with('writer')->findOrFail($id);
        $article->increment('views');
        return view('article', ['article' => $article]);
    }

    public function viewArticleByCategory($category){
        $articles = Article::where('category', $category)->paginate(3);
        return view('articlesCategory', ['articles' => $articles, 'category' => $category]);
    }

    public function viewArticleByWriter(Writer $writer){
        $articles = Article::where('writer_id', $writer->id)->paginate(3);
        return view('articlesWriter', ['articles' => $articles, 'writer' => $writer]);
    }
}