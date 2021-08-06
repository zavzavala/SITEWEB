<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class siteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
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
            'importacao' =>'required',
            'contabilidade' =>'required',
            'tics' =>'required',
            'TecnologiaNuclear' =>'required',
            'id_user' =>'required|numeric',
            
        ];
    }
   /* //public function messages()
    //{
        return[
            'importacao.required' =>'Campo Importacao e obrigatorio.',
            'contabilidade.required' =>'Campo Contabilidade e obrigatorio.',
            'tics.required' =>'Campo TICS e obrigatorio.',
            'TecnologiaNuclear.required' =>'Campo Tecnologia Nuclear e obrigatorio.',
            'id_user.required' =>'Insira o codigo do usuario'

];

    }*/
}
