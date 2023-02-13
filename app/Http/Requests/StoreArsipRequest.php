<?php

namespace App\Http\Requests;

use App\Models\Arsip;


use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreArsipRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'no_arsip' => 'required',
            'klasifikasi' => 'required',
            'bentuk_arsip' => 'required',
            'm_k' => 'required',
            'tahun' => 'required',
            's_d' => 'required',
            'retensi' => 'required',
            'gudang' => 'required',
        ];
    }
}
