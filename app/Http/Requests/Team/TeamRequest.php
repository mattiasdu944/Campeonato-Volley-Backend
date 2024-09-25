<?php

namespace App\Http\Requests\Team;

use Orion\Http\Requests\Request;


class TeamRequest extends Request
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
    public function storeRules(): array
    {
        return [
            "name" => "required|unique:teams,name",
            "totalPoints" => "numeric",
        ];
    }

    public function storeMessages(): array
    {
        return [
            "name.required" => "El nombre es obligatorio",
            "name.unique" => "El nombre ya esta registrado",
            "totalPoints.numeric" => "Debe ser un numero",
        ];
    }

    // public function storeMessages()
    // {
    // }
}
