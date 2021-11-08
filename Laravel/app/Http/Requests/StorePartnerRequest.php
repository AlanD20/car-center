<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class StorePartnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!auth()->check())
            return false;

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
            'name' => ['required', 'string', 'max:25'],
            'description' => ['required', 'string', 'max:255'],
            'image' => [
                'required', 'image', 'max:2048',
                'mimes:jpeg,jpg,png,svg',
            ],
        ];
    }
    public function storeRecord()
    {
        $image = $this->uploadImage();
        $partner = $this->user()->partners()->create([
            'name' => $this->safe()->name,
            'description' => $this->safe()->description,
            'image' => $image,
        ]);

        if (!$partner)
            throw ValidationException::withMessages([
                'failed' => "Failed to add a new partner"
            ]);
    }

    function uploadImage()
    {
        return 'uploads/' . $this->file('image')->store('images/partners', 'public');
    }
}
