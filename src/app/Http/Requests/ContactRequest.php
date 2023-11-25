<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last-name' => ['required', 'string', 'max:255'],
            'first-name' => ['required', 'string', 'max:255'],
            'gender' => 'required',
            'email' => ['required', 'email:rfc,dns'],
            'postcode' => ['required', 'regex:/^\d{3}-\d{4}$/'],
            'address' => ['required','max:255'],
            'building_name' => 'max:255',
            'content' => ['required','max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last-name.required' => '名字を入力してください。',
            'last-name.string' => '名字は文字列で入力してください。',
            'last-name.max' => '名字は255文字以下で入力してください。',
            'first-name.required' => '名前を入力してください。',
            'first-name.string' => '名前は文字列で入力してください。',
            'first-name.max' => '名前は255文字以下で入力してください。',
            'gender.required' => '性別を選択してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスが正しくありません。',
            'postcode.required' => '郵便番号を入力してください。',
            'postcode.regex' => '郵便番号はハイフンを含めて8桁で入力してください。',
            'address.required' => '住所を入力してください。',
            'address.max' => '住所は255文字以下で入力してください。',
            'building_name.max' => '建物名は255文字以下で入力してください。',
            'content.required' => 'ご意見を入力してください。',
            'content.max' => 'ご意見は120文字以内で入力してください。',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'postcode' => mb_convert_kana($this->input('postcode'), 'n'),
        ]);
    }
}
