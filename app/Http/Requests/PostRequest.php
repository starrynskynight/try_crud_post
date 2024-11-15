<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:50',
            'body' => 'required'
        ];
    }
    public function contact(Request $request)
{
    // Validasi atau proses data
    $data = $request->all(); // Ambil data dari form

    // Redirect ke halaman hasil dengan data
    return redirect()->route('result')->with('data', $data);
}


    public function messages()
    {
        return [
            'title.required' => 'Nama harap diisi.',
            'title.max'   => 'Nama tidak boleh melebihi 50 karakter',
            'body.required'  => 'Pesan harap diisi',
        ];
    }
}