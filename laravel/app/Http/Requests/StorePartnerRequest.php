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
            'en_name' => ['required', 'string', 'max:25'],
            'ku_name' => ['required', 'string', 'max:25'],
            'ar_name' => ['required', 'string', 'max:25'],
            'en_description' => ['required', 'string', 'max:255'],
            'ku_description' => ['required', 'string', 'max:255'],
            'ar_description' => ['required', 'string', 'max:255'],
            'image' => [
                'required', 'image', 'max:2048',
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
            'en_name' => "English Name",
            'ku_name' => "Kurdish Name",
            'ar_name' => "Arabic Name",
            'en_description' => "English Description",
            'ku_description' => "Kurdish Description",
            'ar_description' => "Arabic Description",
        ];
    }
    public function storeRecord()
    {
        $image = $this->uploadImage();
        $partner = $this->user()->partners()->create([
            'en_name' => $this->safe()->en_name,
            'ku_name' => $this->safe()->ku_name,
            'ar_name' => $this->safe()->ar_name,
            'en_description' => $this->safe()->en_description,
            'ku_description' => $this->safe()->ku_description,
            'ar_description' => $this->safe()->ar_description,
            'image' => $image,
        ]);

        if (!$partner)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.partner.fail.create')
            ]);
    }

    function uploadImage()
    {
        return 'uploads/' . $this->file('image')->store('images/partners', 'public');
    }
}
