<?php

namespace App\Http\Requests;
use App\User;

use Illuminate\Foundation\Http\FormRequest;

class newRegisterRequest extends FormRequest
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
    //     return [
    //         'userid' => 'required',
    //         // 'slug' => $this->isMethod('POST') ? 'nullable' : 'required|unique:categories,slug,' . $this->category->id,
    //         // 'parent_id' => 'nullable',
    //         // 'description' => 'nullable',
    //         // 'thumbnail' => 'nullable',
    //         // 'active' => 'nullable|boolean'
    //     ];
    }
}
