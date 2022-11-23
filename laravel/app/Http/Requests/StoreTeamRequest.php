<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class StoreTeamRequest extends FormRequest
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
            'en_position' => ['required', 'string', 'max:25'],
            'ku_position' => ['required', 'string', 'max:25'],
            'ar_position' => ['required', 'string', 'max:25'],
            'image' => [
                'sometimes', 'image', 'max:2048',
                'mimes:jpeg,jpg,png,svg',
            ],
            'facebook' => ['sometimes', 'nullable', 'string', 'url'],
            'instagram' => ['sometimes', 'nullable', 'string', 'url'],
            'twitter' => ['sometimes', 'nullable', 'string', 'url'],
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
            'en_position' => "English Position",
            'ku_position' => "Kurdish Position",
            'ar_position' => "Arabic Position",
        ];
    }

    public function storeRecord()
    {
        $this->merge([
            'socials' => [
                'facebook' => $this->safe()->facebook,
                'instagram' => $this->safe()->instagram,
                'twitter' => $this->safe()->twitter,
            ]
        ]);
        $image = $this->hasFile('image') ? $this->uploadImage() : "uploads/images/teams/default.png";;
        $member = $this->user()->teams()->create([
            'en_name' => $this->safe()->en_name,
            'ku_name' => $this->safe()->ku_name,
            'ar_name' => $this->safe()->ar_name,
            'en_position' => $this->safe()->en_position,
            'ku_position' => $this->safe()->ku_position,
            'ar_position' => $this->safe()->ar_position,
            'image' => $image,
            'socials' => $this->socials
        ]);

        if (!$member)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.team.fail.create')
            ]);
    }

    function uploadImage()
    {
        return 'uploads/' . $this->file('image')->store('images/teams', 'public');
    }
}
