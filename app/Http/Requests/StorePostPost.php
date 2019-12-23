<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostPost extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:5|max:500',
            'url_clean' => 'required|min:5|max:500',
            'content' => 'required|min:5'
        ];
    }
}
