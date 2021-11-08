<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateProfileRequest extends FormRequest
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
            'username' => [
                'sometimes', 'min:3', 'string', 'max:15',
                'regex:/^[a-zA-Z0-9]{3,15}+$/'
            ],
            'current_password' => ['sometimes', 'nullable', 'string', 'max:255',],
            'password' => ['sometimes', 'nullable', 'string', 'confirmed', 'max:255'],
        ];
    }
    public function updateRecord(User $user)
    {
        if (!\is_null($this->password)) $this->makePassword($user);

        $user = $user->update($this->safe()->only([
            'name', 'username'
        ]));

        if (!$user)
            throw ValidationException::withMessages([
                'failed' => "Failed to update the user profile"
            ]);
    }
    function makePassword(User $user)
    {
        if (auth()->user()->username === config('info.admin_username'))             return $this->updatePassword($user);

        if (empty($this->current_password))
            throw ValidationException::withMessages([
                'current_password' => "Current password is required"
            ]);

        if (!Hash::check($this->safe()->current_password, $user->password))
            throw ValidationException::withMessages([
                'current_password' => "Current password is incorrect."
            ]);

        return $this->updatePassword($user);
    }
    function updatePassword(User $user)
    {
        return $user->update([
            'password' => Hash::make($this->safe()->password)
        ]);
    }
}
