<?php

namespace App\Http\Requests;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateTeamRequest extends FormRequest
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
            'name' => ['sometimes', 'required', 'string', 'max:25'],
            'position' => ['sometimes', 'required', 'string', 'max:25'],
            'image' => [
                'sometimes', 'image', 'max:2048',
                'mimes:jpeg,jpg,png,svg',
            ],
            'facebook' => ['sometimes', 'nullable', 'string', 'url'],
            'instagram' => ['sometimes', 'nullable', 'string', 'url'],
            'twitter' => ['sometimes', 'nullable', 'string', 'url'],
        ];
    }
    public function updateRecord(Team $team)
    {
        $socials = $this->mergeSocials();
        $inputs = collect($this->safe()->all())->put('socials', $socials);
        if ($this->hasFile('image')) {
            $image = $this->uploadImage($team->image);
            $inputs->put('image', $image);
        }
        $member = $team->update($inputs->only([
            'name', 'position', 'socials', 'image'
        ])->toArray());

        if (!$member)
            throw ValidationException::withMessages([
                'failed' => "Failed to update the team member"
            ]);
    }

    function uploadImage(string $path)
    {
        if (file_exists($path)) {
            $real_path = str_replace('uploads/', '', $path);
            Storage::disk('public')->delete($real_path);
        }
        return 'uploads/' . $this->file('image')->store('images/team', 'public');
    }
    function mergeSocials()
    {
        $socials = [];
        if ($this->has('facebook'))
            $socials['facebook'] = $this->safe()->facebook;
        if ($this->has('instagram'))
            $socials['instagram'] = $this->safe()->instagram;
        if ($this->has('twitter'))
            $socials['twitter'] = $this->safe()->twitter;
        if (count($socials) === 0) return;
        return $socials;
    }
}
