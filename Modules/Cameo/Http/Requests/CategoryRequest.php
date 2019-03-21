<?php

namespace Modules\Cameo\Http\Requests;
use Modules\Cameo\Libs\Classes\BaseRequest;

class CategoryRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|min:6|max:255'
        ];
    }
}
