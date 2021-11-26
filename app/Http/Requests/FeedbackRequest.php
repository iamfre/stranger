<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'name' => 'required|min:5|max:30',
            'body' => 'required|min:5|max:300',
            'title' => 'required|min:5|max:50',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Вы не ввели имя',
            'name.min' => 'Слишком короткое имя',
            'name.max' => 'Слишком длинное имя',
            'email.required' => 'Вы не ввели Email',
            'email.email' => 'Введите корректный Email',
            'body.required' => 'Вы не ввели сообщение',
            'body.min' => 'Слишком короткое сообщение',
            'body.max' => 'Превышен лимит длины сообщения',
            'title.required' => 'Вы не ввели тему сообщения',
            'title.min' => 'Слишком короткая тема',
            'title.max' => 'Превышен лимит длины темы',
        ];
    }
}
