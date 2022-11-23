<?php

namespace App\Http\Requests;

use App\Models\Slide;
use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Validation\ValidationException;

class StoreSlideRequest extends FormRequest
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
            'file' => [
                'required', 'file', 'max:4096',
                'mimes:jpeg,jpg,png,svg,gif,mp4,avi',
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
            'file' => "File",
        ];
    }
    public function storeRecord()
    {
        $this->mergeFileType();
        $path = $this->uploadFile();
        $slide = Slide::create([
            'file' => $path,
            'type' => $this->type,
        ]);

        if (!$slide)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.slide.fail.create')
            ]);
    }

    function uploadFile()
    {
        if ($this->type === 'image')
            return 'uploads/' . $this->file('file')->store('images/slides', 'public');
        else if ($this->type === 'video')
            return 'uploads/' . $this->file('file')->store('videos/slides', 'public');
    }
    function mergeFileType()
    {
        //uploads/images/slides/file_name.jpg
        //uploads/images/slides/4s6bPKcCeklwxQVMwsyfqSlycatkRZZQtXQtKhpr.jpg
        $clientMimeType = $this->file('file')->getClientMimeType();
        $isVideo = \preg_match('/\/(mp4|avi)/i', $clientMimeType);
        $isImage = \preg_match('/\/(jpeg|jpg|png|svg|gif)/i', $clientMimeType);
        if ($isImage) $this->merge(['type' => "image"]);
        else if ($isVideo) return $this->merge(['type' => "video"]);
        else throw ValidationException::withMessages([
            'failed' => __('index.admin.messages.slide.fail.invalid_file')
        ]);
    }
}
