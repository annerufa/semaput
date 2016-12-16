<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class lahanRequest extends FormRequest
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
            'umurPadi' => 'required|numeric|min:1',
            'luasLahan' => 'required|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
            'umurPadi.required' => 'Umur Padi Tidak Boleh Kosong.',
            'luasLahan.required' => 'Luas Lahan Tidak Boleh Kosong.',
            'umurPadi.numeric' => 'Masukkan data yang valid',
            'luasLahan.numeric' => 'Masukkan data yang valid',
            'umurPadi.min' => 'Masukkan data yang valid',
            'luasLahan.min' => 'Masukkan data yang valid'
        ];
    }
}
