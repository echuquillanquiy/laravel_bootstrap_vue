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
            'content' => 'required|min:5',
            'category_id' => 'required',
            'posted' => 'required'
        ];
    }

    /*public function messages() 
    {
        return [
            'title.required' => 'El título es requerido',
            'title.min' => 'El título debe tener mínimo 5 carácteres',
            'url_clean.required' => 'La url es requerida',
            'url_clean.min' => 'La url debe tener mínimo 5 carácteres', 
            'content.required' = 'El contenido es requerido',
            'content.min' => 'El contenido debe tener mínimo 5 carácteres'
        ];
    }*/
}
