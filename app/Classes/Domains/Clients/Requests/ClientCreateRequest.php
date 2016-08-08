<?php

namespace App\Classes\Domains\Clients\Requests;

use App\Http\Requests\Request;

class ClientCreateRequest extends Request
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
            'name'    => 'required|alpha',
            'surname' => 'required|alpha',
            'email'   => 'sometimes|email',
            'phone'   => 'required',
        ];
    }
}
