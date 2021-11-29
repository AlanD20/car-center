<?php

namespace App\Http\Requests;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdatePartnerRequest extends FormRequest
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
            'en_name' => "English Name",
            'ku_name' => "Kurdish Name",
            'ar_name' => "Arabic Name",
            'en_description' => "English Description",
            'ku_description' => "Kurdish Description",
            'ar_description' => "Arabic Description",
        ];
    }
    public function updateRecord(Partner $partner)
    {
        $inputs = collect($this->safe()->all());
        if ($this->hasFile('image')) {
            $image = $this->uploadImage($partner->image);
            $inputs->put('image', $image);
        }
        $partner = $partner->update($inputs->only([
            'en_name', 'en_description', 'ku_name', 'ku_description', 'ar_name', 'ar_description', 'image'
        ])->toArray());

        if (!$partner)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.partner.fail.update')
            ]);
    }

    function uploadImage(string $path)
    {
        if (file_exists($path)) {
            $real_path = str_replace('uploads/', '', $path);
            Storage::disk('public')->delete($real_path);
        }
        return 'uploads/' . $this->file('image')->store('images/partners', 'public');
    }
}
