<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use Validator;

class ArticleController extends Controller
{
    public function create(ArticleRequest $request)
    {
        $data = $request->validated();
        
        $article = Article::create($data);
        return response()->json($data, 201);
    }

    public function getAll()
    {
        $articles = Article::orderBy("id", 'asc')->get();
        return response($articles, 200);
    }

    public function get(Request $request, $articleId)
    {
        $article = Article::where('id', $articleId)->firstOrFail();
        return response($article, 200);
    }

    public function update(ArticleRequest $request, $articleId)
    {
        $data = $request->validated();
        $article = Article::where('id', $articleId)->firstOrFail()->update($data);
        return response($article, 200);
    }

    public function delete(Request $request, $articleId)
    {
        Article::where('id', $articleId)->firstOrFail()->delete();
        return response("Successful", 200);
    }
}
