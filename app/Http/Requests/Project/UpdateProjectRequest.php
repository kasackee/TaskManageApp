<?php

namespace App\Http\Requests\Project;

use App\Http\Requests\ApiRequest;

class UpdateProjectRequest extends ApiRequest
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
     * バリデーションルール
     * （テーブル名の項目は id）
     *
     * @return array
     */
    public function rules()
    {
        return [
            'project' => 'required|integer|exists:projects,id',
            'name' => 'max:255',
            'description' => '',
            'create_user_id' => 'numeric',
        ];
    }
}
