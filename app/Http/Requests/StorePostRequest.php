<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;    
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title"=>"required|string|max:50",
            "body"=>['required','string','max:500'],
            // "tags"=>'array',
            // "tags.*"=>'string|min:2'
        ];
    }
    public function message(): array
    {
        return [
            "title.required"=>"title is required",
            "title.string"=>"title should be a string",
            "title.max"=>"title should not be greater then :max chars",

            "body"=>"body is required",
        ];
    }
    
}
