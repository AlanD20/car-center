<?php

namespace App\Http\Requests;

use App\Models\AboutSection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateAboutSectionRequest extends FormRequest
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
            'en_content' => ['sometimes', 'required', 'string'],
            'ku_content' => ['sometimes', 'required', 'string'],
            'ar_content' => ['sometimes', 'required', 'string'],
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
            'en_content' => "English Description",
            'ku_content' => "Kurdish Description",
            'ar_content' => "Arabic Description",
        ];
    }
    public function updateRecord()
    {
        $about = AboutSection::first();
        $inputs = collect($this->safe()->all());
        if ($this->hasFile('image')) {
            $image = $this->uploadImage($about->image);
            $inputs->put('image', $image);
        }

        $about = $about->update($inputs->only([
            'en_content', 'ku_content', 'ar_content', 'image'
        ])->toArray());

        if (!$about)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.about_section.fail')
            ]);
    }

    function uploadImage(string $path)
    {
        if (file_exists($path)) {
            $real_path = str_replace('uploads/', '', $path);
            Storage::disk('public')->delete($real_path);
        }
        return 'uploads/' . $this->file('image')->store('images/about', 'public');
    }
}
