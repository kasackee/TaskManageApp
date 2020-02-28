<?php

namespace App\Http\Requests\Task;

use App\Http\Requests\ApiRequest;

class UpdateTaskRequest extends ApiRequest
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
            'project_id' => 'required|exists:projects,id',
            'title' => 'required|max:255',
            'detail' => 'present',
            'status' => 'required',
            'priority' => 'numeric',
            'start_date' => 'date',
            'end_date' => 'date',
            'work_user_id' => 'numeric',
            'created_user_id' => 'numeric', // 不要
            'parent_task_id' => 'numeric',
        ];
    }
}
