<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKerjasamaRequest extends FormRequest
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
            'nomor_mou'=> 'required',
            'nomor_mou_old'     =>  'required',
            'nomor_mou_instansi'=> 'required',
            'nomor_instansi'=> 'required',
            'email_instansi'=> 'required',
            'alamat_instansi'=> 'required',
            'nama_instansi'=> 'required',
            'nama_contact_person'=> 'required',
            'contact_person'=> 'required',
            'jenis_kegiatan'=> 'required',
            'manfaat'=> 'required',
            'implementasi'=> 'required',
            'prodi'=> 'required',
            'kategori'=> 'required',
            'mou' =>  'required|mimes:docx,pdf',
            'hard_file'=> 'required',
            'tgl_mulai'=> 'required|date|before:tgl_berakhir',
            'tgl_berakhir'=> 'required|date',
        ];
    }
}
