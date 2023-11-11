<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIssueRequest extends FormRequest
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
            'product_id' => 'required',
            'issue_type_id' => 'required',
            'issue_status_id' => 'required',
            'issue_priority_id' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'date_resolved' => 'nullable|date',
        ];
    }
}
