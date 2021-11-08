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
            'title' => ['required', 'string', 'max:25'],
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
        $service = $this->user()->services()->create([
            'title' => $this->safe()->title,
            'description' => $this->safe()->description,
            'image' => $image,
        ]);

        if (!$service)
            throw ValidationException::withMessages([
                'failed' => "Failed to add a new service"
            ]);
    }

    function uploadImage()
    {
        return 'uploads/' . $this->file('image')->store('images/services', 'public');
    }
}
