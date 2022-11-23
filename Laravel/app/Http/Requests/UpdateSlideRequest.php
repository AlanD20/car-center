<?php

namespace App\Http\Requests;

use App\Models\Slide;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateSlideRequest extends FormRequest
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
    public function updateRecord(Slide $slide)
    {
        $this->mergeFileType();
        if ($this->hasFile('file'))
            $path = $this->uploadFile($slide->file);

        $slide = $slide->update([
            'file' => $path,
            'type' => $this->type,
        ]);

        if (!$slide)
            throw ValidationException::withMessages([
                'failed' => __('index.admin.messages.slide.fail.update')
            ]);
    }

    function uploadFile(string $path)
    {
        if (file_exists($path)) {
            $real_path = str_replace('uploads/', '', $path);
            Storage::disk('public')->delete($real_path);
        }
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
