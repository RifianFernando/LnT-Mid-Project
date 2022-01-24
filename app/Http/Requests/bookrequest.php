<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DateTime;

class bookrequest extends FormRequest
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
            'judul' => 'required|min:5|max:20',
            'penulis' => 'required|regex:/^[a-zA-Z]+$/u|min:5|max:20',
            'jumlahhalaman' => 'required|numeric|min:1',
            'terbit' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'jumlahhalaman.numeric' => 'jumlah halaman harus numerik',
            'penulis.regex' => 'Penulis buku hanya berupa huruf',
            'judul' => 'this field is required',
        ];

    }
}
