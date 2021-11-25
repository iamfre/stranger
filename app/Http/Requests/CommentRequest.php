<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'author' => 'required|min:5|max:30',
            'body' => 'required|min:5|max:300',
            'article_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'author.required' => 'Вы не ввели имя',
            'author.min' => 'Слишком короткое имя',
            'author.max' => 'Слишком длинное имя',
            'body.required' => 'Вы не ввели сообщение',
            'body.min' => 'Слишком короткое сообщение',
            'body.max' => 'Превышен лимит длины сообщения',
        ];
    }
}
