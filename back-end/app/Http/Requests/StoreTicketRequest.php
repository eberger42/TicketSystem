<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'assigned_user_id' => 'required',
            'client_user_id' => 'required',
            'product_id' => 'required',
            'ticket_status_id' => 'required',
            'ticket_priority_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'date_closed' => 'required',
        ];
    }
}
