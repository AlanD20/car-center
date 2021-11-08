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
            'title' => ['sometimes', 'required', 'string', 'max:25'],
            'description' => ['sometimes', 'required', 'string', 'max:255'],
            'image' => [
                'sometimes', 'image', 'max:2048',
                'mimes:jpeg,jpg,png,svg',
            ],
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
            'title', 'description', 'image'
        ])->toArray());

        if (!$service)
            throw ValidationException::withMessages([
                'failed' => "Failed to update the service"
            ]);
    }

    function uploadImage(string $path)
    {
        if (file_exists($path)) {
            $real_path = str_replace('uploads/', '', $path);
            Storage::disk('public')->delete($real_path);
        }
        return 'uploads/' . $this->file('image')->store('images/services', 'public');
    }
}
