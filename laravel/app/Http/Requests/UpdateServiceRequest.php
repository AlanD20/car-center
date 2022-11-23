<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateServiceRequest extends FormRequest
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
            'en_title' => ['sometimes', 'required', 'string', 'max:25'],
            'ku_title' => ['sometimes', 'required', 'string', 'max:25'],
            'ar_title' => ['sometimes', 'required', 'string', 'max:25'],
            'en_description' => ['sometimes', 'required', 'string', 'max:255'],
            'ku_description' => ['sometimes', 'required', 'string', 'max:255'],
            'ar_description' => ['sometimes', 'required', 'string', 'max:255'],
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
    public function updateRecord(Service $service)
    {
        $inputs = collect($this->safe()->all());
        if ($this->hasFile('image')) {
            $image = $this->uploadImage($service->image);
            $inputs->put('image', $image);
        }
        $service = $service->update($inputs->only([
            'en_title', 'en_description', 'ku_title', 'ku_description', 'ar_title', 'ar_description', 'image'
        ])->toArray());

        if (!$service)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.service.fail.update')
            ]);
    }

    function uploadImage(string $path)
    {
        $notDefault = \preg_match('/(default.svg)/', $path);
        if (file_exists($path) && ($notDefault === 0)) {
            $real_path = str_replace('uploads/', '', $path);
            Storage::disk('public')->delete($real_path);
        }
        return 'uploads/' . $this->file('image')->store('images/services', 'public');
    }
}
