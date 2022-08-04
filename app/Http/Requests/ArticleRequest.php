<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id" => "unique:article,id",
            "title" => "required|string|min:30",
            "content" => "required|string",
            "author" => "required|string",
            "category" => "required|string",
            "published_at" => "required|date",
        ];
    }

    public function messages() {
        return [
            'title.required' => "Title Cant Be Empty",
            'title.string' => "Title Must Be a String",
            'title.min' => "The title must be at least 30 characters",
            'content.required' => "content Cant Be Empty",
            'content.string' => "content Must Be a String",
            'author.required' => "author Cant Be Empty",
            'author.string' => "author Must Be a String",
            'category.required' => "category Cant Be Empty",
            'category.string' => "category Must Be a String",
            'published_at.required' => "published_at Cant Be Empty",
            'published_at.date' => "published_at Must Be a Date",
        ];
    }
}
