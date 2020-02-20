<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiRequest extends FormRequest
{

    /**
     * 更新、削除時に渡されるルート引数を Request Parametersに含める。
     * ただし、すでにキーが存在している場合は上書きしない。
     * @return array
     */
    public function validationData()
    {
        $params = $this->all();
        $route_params = $this->route()->parameters();

        return $params + $route_params;
    }

    /**
     * [override] バリデーション失敗時ハンドリング
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @see FormRequest::failedValidation()
     * @throws HttpResponseException
     */
    protected function failedValidation( Validator $validator )
    {
        $response['data']    = [];
        $response['status']  = 'NG';
        $response['summary'] = 'Failed validation.';
        $response['errors']  = $validator->errors()->toArray();

        throw new HttpResponseException(
            response()->json( $response, 422 )
        );
    }
}