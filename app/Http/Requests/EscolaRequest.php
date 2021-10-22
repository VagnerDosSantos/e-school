<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Carbon;

class EscolaRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $request->situacao = 1;
        $validar = [
            'codigo_escola' => 'required|integer|size:8',
            'situacao' => 'required|integer|size:1',
            'data_referencia' => Carbon::parse('last wednesday of may')->toDateString(),
            'data_inicio' => [
                'date_format:Y-m-d|before:data_final',
                Rule::requiredIf(function () use ($request) {
                    return ($request->situacao === 1);
                })
            ],
            'data_final' => [
                'date_format:Y-m-d|after:data_referencia',
                Rule::requiredIf(function () use ($request) {
                    return ($request->situacao === 1);
                })
            ],
            'nome' => 'required|string|max:100',
            'ato_criacao' => 'string',
            'cep' => 'required|numeric|size:8',
            'estado_id' => 'required|numeric',
            'cidade_id' => 'required|numeric',
            'distrito_id' => 'required|numeric',
            'endereco' => 'required|string|max:100',
            'numero' => 'string|max:10',
            'complemento' => 'string|max:20',
            'bairro' => 'string|max:50',
            'telefone' => 'string|max:20',
            'telefone_2' => 'string|max:20',
            'email' => 'string|max:50',
            'codigo_regional' => 'string|max:5',
            'localizacao' => 'required|numeric',
            'localizacao_diferenciada' => 'required|numeric',
            'dependencia_administrativa' => 'required|numeric',
            'vinculo_escolar' => [
                'array',
                'prohibited_if:dependencia_administrativa,4',
                Rule::requiredIf(in_array($request->dependencia_administrativa, [1, 2, 3]))
            ],
            'escola_privada_mantenedora' => [
                'array',
                'prohibited_if:dependencia_administrativa,1,2,3',
                Rule::requiredIf($request->situacao === 1 && $request->dependencia_administrativa === 4)
            ],
            'escola_privada_categoria' => [
                'numeric',
                'prohibited_if:dependencia_administrativa,1,2,3',
                Rule::requiredIf($request->dependencia_administrativa === 4)
            ],
            'escola_privada_convenio_publico' => [
                'numeric',
                'prohibited_if:dependencia_administrativa,1,2,3',
                Rule::requiredIf($request->dependencia_administrativa === 4)

            ],
            'escola_privada_mantenedora_cnpj' => [
                'numeric',
                'prohibited_if:dependencia_administrativa,1,2,3',
                Rule::requiredIf(
                    in_array(4, $request->escola_privada_mantenedora) &&
                        $request->regulamentacao_conselho === 1
                )
            ],
            'cnpj' => [
                'numeric',
                Rule::requiredIf($request->dependencia_administrativa === 4)
            ],
            'regulamentacao_conselho' => [
                'numeric',
                Rule::requiredIf($request->situacao === 1)
            ],
            'esfera_administrativa' => [
                'prohibited_if:regulamentacao_conselho,0',
                Rule::requiredIf(in_array($request->regulamentacao_conselho, [1, 2]))
            ],
            'unidade_vinculada' => [
                'numeric',
                Rule::requiredIf($request->situacao === 1)
            ],
            'codigo_escola_sede' => [
                'numeric|size:' . ($request->unidade_vinculada === 1) ? 8 : 9,
                Rule::requiredIf($request->unidade_vinculada === 1 || $request->unidade_vinculada === 2)
            ],
            'foto' => '',
        ];

        return $validar;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
