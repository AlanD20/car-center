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
            'en_name' => ['sometimes', 'required', 'string', 'max:25'],
            'ku_name' => ['sometimes', 'required', 'string', 'max:25'],
            'ar_name' => ['sometimes', 'required', 'string', 'max:25'],
            'en_position' => ['sometimes', 'required', 'string', 'max:25'],
            'ku_position' => ['sometimes', 'required', 'string', 'max:25'],
            'ar_position' => ['sometimes', 'required', 'string', 'max:25'],
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
    public function updateRecord(Team $team)
    {
        $socials = $this->mergeSocials();
        $inputs = collect($this->safe()->all())->put('socials', $socials);
        if ($this->hasFile('image')) {
            $image = $this->uploadImage($team->image);
            $inputs->put('image', $image);
        }
        $member = $team->update($inputs->only([
            'en_name', 'en_position', 'ku_name', 'ku_position', 'ar_name', 'ar_position', 'socials', 'image'
        ])->toArray());

        if (!$member)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.team.fail.update')
            ]);
    }

    function uploadImage(string $path)
    {
        $notDefault = \preg_match('/(default.png)/', $path);
        if (file_exists($path) && ($notDefault === 0)) {
            $real_path = str_replace('uploads/', '', $path);
            Storage::disk('public')->delete($real_path);
        }
        return 'uploads/' . $this->file('image')->store('images/teams', 'public');
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
