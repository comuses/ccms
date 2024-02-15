<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JudgeUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'court_id' => ['required', 'exists:courts,id'],
            'judgeID' => ['required', 'max:255', 'string'],
            'name' => ['required', 'max:255', 'string'],
            'Address' => ['required', 'max:255', 'string'],
            'state' => ['required', 'max:255', 'string'],
            'courtTyep' => ['required', 'max:255', 'string'],
            'Emptype' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
        ];
    }
}
