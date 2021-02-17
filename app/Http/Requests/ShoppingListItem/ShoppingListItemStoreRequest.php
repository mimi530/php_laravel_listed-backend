<?php

namespace App\Http\Requests\ShoppingListItem;

use App\Models\ShoppingListItem;
use Illuminate\Foundation\Http\FormRequest;

class ShoppingListItemStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', [ShoppingListItem::class, $this->route('list')]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => '',
        ];
    }
}