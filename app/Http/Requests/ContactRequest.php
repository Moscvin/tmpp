<?php

namespace App\Http\Requests;

use App\DTO\ContactDTO;
use App\Models\Vars;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        $vars = Vars::getList();

        return [
            'name.required' => $vars['name__required'],
            'name.string' => $vars['name__string'],
            'name.max' => $vars['name__max'],
            'email.required' => $vars['email__required'],
            'email.string' => $vars['email__string'],
            'email.email' => $vars['email__email'],
            'email.max' => $vars['email__max'],
            'message.required' => $vars['message__required'],
            'message.string' => $vars['message__string']
        ];
    }

    public function getDTO(): ContactDTO
    {
        return new ContactDTO(
            name: $this->input('name'),
            email: $this->input('email'),
            message: $this->input('message')
        );
    }
}
