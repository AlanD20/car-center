<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class StoreServiceRequest extends FormRequest
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
            'en_title' => ['required', 'string', 'max:25'],
            'ku_title' => ['required', 'string', 'max:25'],
            'ar_title' => ['required', 'string', 'max:25'],
            'en_description' => ['required', 'string', 'max:255'],
            'ku_description' => ['required', 'string', 'max:255'],
            'ar_description' => ['required', 'string', 'max:255'],
            'image' => [
                'sometimes', 'image', 'max:2048',
                'mimes:jpeg,jpg,png,svg',
            ],
        ];
    }
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'en_title' => "English Title",
            'ku_title' => "Kurdish Title",
            'ar_title' => "Arabic Title",
            'en_description' => "English Description",
            'ku_description' => "Kurdish Description",
            'ar_description' => "Arabic Description",
        ];
    }
    public function storeRecord()
    {
        $image = $this->hasFile('image') ? $this->uploadImage() : "uploads/images/services/default.svg";
        $service = $this->user()->services()->create([
            'en_title' => $this->safe()->en_title,
            'ku_title' => $this->safe()->ku_title,
            'ar_title' => $this->safe()->ar_title,
            'en_description' => $this->safe()->en_description,
            'ku_description' => $this->safe()->ku_description,
            'ar_description' => $this->safe()->ar_description,
            'image' => $image,
        ]);

        if (!$service)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.service.fail.create')
            ]);
    }

    function uploadImage()
    {
        return 'uploads/' . $this->file('image')->store('images/services', 'public');
    }
}
