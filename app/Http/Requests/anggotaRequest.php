<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class anggotaRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nama_petani' => 'required',
            'alamat' => 'required',
            'tlp' => 'required|numeric',
            'Username' => 'required',
            'Password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_petani.required' => 'Nama Tidak Boleh Kosong.',
            'alamat.required' => 'Alamat Tidak Boleh Kosong.',
            'tlp.required' => 'Telepon Tidak Boleh Kosong.',
            'tlp.numeric' => 'Data berupa angka.',
            'Username.required' => 'Username Tidak Boleh Kosong.',
            'Password.required' => 'Password Tidak Boleh Kosong.'
        ];
    }
}

// $messages = array(
//         'required' => 'The :attribute is really really really important.',
//         'same'  => 'The :others must match.'
//     );