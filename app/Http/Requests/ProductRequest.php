<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductRequest extends FormRequest
{
    public function rules()
    {
		return [
			'name' => ['min:6', 'max:1000000000'],
		];

    }
}
