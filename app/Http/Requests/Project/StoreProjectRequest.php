<?php

namespace App\Http\Requests\Project;

use App\Http\Requests\ApiRequest;

class StoreProjectRequest extends ApiRequest
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
            'name' => 'required|max:255',
            'description' => 'present',
            'create_user_id' => 'required|numeric',
        ];
    }
}
