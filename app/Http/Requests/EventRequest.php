<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
            'title' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'asal_surat' => 'required',
            'bidang_penanggung_jawab' => 'required',
            'keterangan' => 'required',
            'no_surat' => 'required',
            'no_agenda' => 'required',
            'category' => 'required'
        ];
    }
}
