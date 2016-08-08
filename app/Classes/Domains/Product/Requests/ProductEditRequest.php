<?php

namespace App\Classes\Domains\Product\Requests;

use App\Http\Requests\Request;

class ProductEditRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize ()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules ()
    {
        return [
            'name'        => 'required',
            'picture'     => 'sometimes|required',
            'category_id' => 'required|numeric',
            'sum'         => 'required|numeric',
            'percentage'  => 'sometimes'
            // 'name' => 'required|alpha'
        ];
    }
}
