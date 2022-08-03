<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Validator;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        #write your code for article creation here...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
        #all fields are required
    }

    public function getAll()
    {
        #write your code to get all articles...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
    }

    public function get(Request $request, $articleId)
    {
        #write your code to get all article specific by id...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
    }

    public function update(Request $request, $articleId)
    {
        #write your code to update article specific by id...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
    }

    public function delete(Request $request, $articleId)
    {
        #write your code to delete article specific by id...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
    }
}
