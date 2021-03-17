<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class editcaterequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($request->kt==0)
        {
             return [
                 //$id = $this->id;
                 'name'=>'unique:categories,cate_name,'.$this->segment(4).',cate_id',
                 'code'=>'unique:categories,cate_code,'.$this->segment(4)
             ];
        }
        else
        {
            return [
                'name'=>'unique:categories,cate_name,'.$this->segment(4),
                'code'=>'unique:categories,cate_code,'.$this->segment(4)
            ];
         }

    }
}
