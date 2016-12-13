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
            'umurPadi' => 'required|numeric',
            'luasLahan' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'umurPadi.required' => 'Umur Padi Tidak Boleh Kosong.',
            'luasLahan.required' => 'Luas Lahan Tidak Boleh Kosong.',
            'umurPadi.numeric' => 'Umur berupa angka.',
            'luasLahan.numeric' => 'Luas lahan berupa angka.'
        ];
    }
}
