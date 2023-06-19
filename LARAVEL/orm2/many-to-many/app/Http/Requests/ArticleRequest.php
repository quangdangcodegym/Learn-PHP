<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:255',
            'short_intro' => 'required|min:1|max:255',
            'category_id' => 'integer',
            'author_id' => 'integer',
        ];
    }

    // Optional: viết thêm hàm message để custom hiển thị thông báo lỗi
    public function messages(){
        return [
                    'title.required'=> 'Tiêu đề là bắt buộc',
                    'title.min'=> 'Phải hơn :min kí tự',
                    'short_intro.required' => ':attribute là bắt buộc, từ 1-255 kí tự'
                ];
    }
    // đổi tên các attributes khi hiển thị ra ngoài 'short_intro.required' => ':attribute là bắt buộc, từ 1-255 kí tự'
    // Problem hiển thị: short_intro là bắt buộc, từ 1-255 kí tự
    public function attributes(){
        return [
            'title'=> 'Tiêu đề',
            'short_intro'=> 'Mô tả'
        ];
    }

    public function withValidator($validator){
        $validator->after(function ($validator){
            // if($validator->somethingElseIsInvalid()){
                // $validator->errors()->add('custom_field', 'aaaaaa');
            // }
            $validator->errors()->add('custom_field', 'aaaaaa');
        });
    }

}
