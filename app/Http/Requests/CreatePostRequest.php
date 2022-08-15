<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class CreatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'   => 'required|string',
            'slug'    => 'required|unique:posts',
            'like'    => 'required|int',
            'content' => 'required|max:100',
        ];
    }
}
