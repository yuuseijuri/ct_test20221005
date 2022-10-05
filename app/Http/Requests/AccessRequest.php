<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AccessRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => 'required',
            'email' => ['required', 'email'],
            'zip11' => 'required',
            'addr11' => 'required',
            'opinion' => ['required', 'max:120'],
        ];
    }
    public function messages() {
        return [
            'name.required' => '名前を入力してください。',
            'name.string' => '名前を文字列で入力してください。',
            'name.max' => '255文字以下で入力してください。',
            'gender.required' => '男性か女性にチェックを入れてください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスの形式で入力してください。',
            'zip11.required' => '郵便番号をハイフンありの8文字で入力してください。',
            // 'zip11.digits' => 'ハイフンありの8文字で入力してください。',
            'addr11.required' => '住所を入力してください。',
            'opinion.required' => 'ご意見を入力してください。',
            'opinion.max' => '120文字以下で入力してください。'
        ];
    }
}
// ['required', 'digits:8'],