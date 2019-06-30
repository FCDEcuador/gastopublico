<?php

namespace BlaudCMS\Http\Requests\Content;

use Illuminate\Foundation\Http\FormRequest;

class IndicatorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('backend_edit_indicators');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:indicators,title,'.$this->get('id'),
            'summary' => 'required',
            'type' => 'required',
            'indicator' => 'required',
            'unity' => 'required',
            'value' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Por favor ingrese el título del indicador',
            'title.unique' => 'Ya existe un indicador con ese título',
            'summary.required' => 'Por favor ingrese la descripción del indicador',
            'type.required' => 'Por favor seleccione el tipo de indicador',
            'indicator.required' => 'Por favor seleccione el indicador',
            'unity.required' => 'Por favor seleccione la unidad',
            'value.required' => 'Por favor ingrese el valor',
        ];
    }
}
