<?php

namespace App\Http\Requests;

use App\Rules\ChuHoa;
use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "ht" => "required|min:3|max:30",
            'tuoi' => 'required|integer|min:16|max:100',
            'ns' => 'required|date',
            'cmnd' => 'required|digits_between:9,10',
            'em' => 'required|email|ends_with:@laravel.edu.vn'
        ];
    }

    public function messages(){
        return [
            'ht.required' => 'Bạn cần nhập họ tên',
            'ht.min'=> 'Họ tên quá ngắn',
            'ns.required'=> 'Bạn cần nhập ngày sinh'
        ];
    }
}
