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
            'name' => ['required', 'string', 'max:25'],
            'position' => ['required', 'string', 'max:25'],
            'image' => [
                'required', 'image', 'max:2048',
                'mimes:jpeg,jpg,png,svg',
            ],
            'facebook' => ['sometimes', 'nullable', 'string', 'url'],
            'instagram' => ['sometimes', 'nullable', 'string', 'url'],
            'twitter' => ['sometimes', 'nullable', 'string', 'url'],
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
        $image = $this->uploadImage();
        $member = $this->user()->teams()->create([
            'name' => $this->safe()->name,
            'position' => $this->safe()->position,
            'image' => $image,
            'socials' => $this->socials
        ]);

        if (!$member)
            throw ValidationException::withMessages([
                'failed' => "Failed to add a new team member"
            ]);
    }

    function uploadImage()
    {
        return 'uploads/' . $this->file('image')->store('images/team', 'public');
    }
}
