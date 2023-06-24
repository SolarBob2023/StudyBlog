<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|required|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполения',
            'title.string' => 'Данные должны быть строкой',
            'content.required' => 'Это поле необходимо для заполения',
            'content.string' => 'Данные должны быть строкой',
            'category_id.required' => 'Это поле необходимо для заполения',
            'category_id.integer' => 'Данные должны быть целым числом',
            'preview_image.required' => 'Это поле необходимо для заполения',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Это поле необходимо для заполения',
            'main_image.file' => 'Необходимо выбрать файл',
            'tag_ids.array' => 'Данные должны быть массивом',
        ];
    }

}
