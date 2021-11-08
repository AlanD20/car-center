<?php

namespace App\Http\Requests;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactFormRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl() . '#contact');
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'email' => ['required', 'string', 'email', 'max:75'],
            'phone' => ['required', 'numeric'],
            'message' => ['required', 'string', 'max:255'],
        ];
    }

    public function sendEmail()
    {
        $data = [
            'name' => $this->safe()->name,
            'email' => $this->safe()->email,
            'phone' => $this->safe()->phone,
            'message' => $this->safe()->message
        ];
        $mail = new PHPMailer(true);
        try {
            //Send using SMTP
            $mail->isSMTP();
            //Set the SMTP server to send through
            $mail->Host = config('info.mail_host');
            //Enable SMTP authentication
            $mail->SMTPAuth   = true;
            //SMTP username
            $mail->Username   = config('info.mail_username');
            //SMTP password
            $mail->Password   = config('info.mail_password');
            //Enable implicit TLS encryption
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->Port = config('info.mail_port');
            //Recipients
            $mail->setFrom(config('info.mail_username'), config('app.name'));
            $mail->addAddress(config('info.mail_username'));
            $messageBody = "Name: {$data['name']}\nEmail: {$data['email']}\nPhone Number: {$data['phone']}\n\nMessage:\n{$data['message']}";
            //Content
            //Set email format to HTML
            $mail->isHTML(true);
            $mail->Subject = config('info.mail_subject');
            $mail->Body = $this->bodyMail($data);
            $mail->send();
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'failed' => "Failed to send a message, please try again."
            ])->redirectTo($this->getRedirectUrl() . '#contact');
        }
        return;
    }
    function bodyMail(array $data)
    {
        return '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); -webkit-text-size-adjust: 100%; -moz-tab-size: 4; -o-tab-size: 4; tab-size: 4; font-family: ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji; line-height: 1.5;">

<head style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity));">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity));">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity));">
    <meta name="color-scheme" content="light" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity));">
    <meta name="supported-color-schemes" content="light" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity));">
</head>

<body style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); margin: 0; font-family: inherit; line-height: inherit;">
    <div class="body-mail" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); --tw-bg-opacity: 1; background-color: rgba(255,255,255,var(--tw-bg-opacity));">
        <div class="contact-form " style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-border-opacity: 1; --tw-bg-opacity: 1; --tw-shadow: 0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -2px rgba(0,0,0,0.05); background-color: rgba(245,245,245,var(--tw-bg-opacity)); border-color: rgba(255,255,255,var(--tw-border-opacity)); border-radius: .75rem; border-width: 6px; display: flex; flex-direction: column; height: 100%; padding: 1rem; width: 100%; box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);">
            <div class="mail-header" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); --tw-bg-opacity: 1; --tw-text-opacity: 1; --tw-shadow: 0 4px 6px -1px rgba(0,0,0,0.1),0 2px 4px -1px rgba(0,0,0,0.06); background-color: rgba(249,189,101,var(--tw-bg-opacity)); border-radius: .5rem; color: rgba(255,255,255,var(--tw-text-opacity)); font-size: 1.25rem; font-weight: 700; line-height: 1.75rem; margin-bottom: 1.5rem; padding-bottom: 1rem; padding-top: 1rem; text-align: center; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;">
                <span style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity));">' . config('info.mail_subject') . '</span>
            </div>
            <div class="mail-body" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); padding: .5rem 1rem;">
                <div class="sender-info" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); display: flex; flex-direction: column; font-size: 1.125rem; line-height: 1.75rem; margin-bottom: 1rem; text-transform: capitalize;">
                    <div style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); display: flex; flex-direction: column; margin-bottom: .75rem;">
                        <span style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); font-size: 1.125rem; font-weight: 700; line-height: 1.75rem; margin-bottom: .25rem;">Name: &nbsp;</span> <span style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); font-size: 1rem; line-height: 1.5rem;">' . $data['name'] . '</span>
                    </div>
                    <div style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); display: flex; flex-direction: column; margin-bottom: .75rem;">
                        <span style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); font-size: 1.125rem; font-weight: 700; line-height: 1.75rem; margin-bottom: .25rem;">Email: &nbsp;</span> <span style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); font-size: 1rem; line-height: 1.5rem;">' . $data['email'] . '</span>
                    </div>
                    <div style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); display: flex; flex-direction: column; margin-bottom: .75rem;">
                        <span style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); font-size: 1.125rem; font-weight: 700; line-height: 1.75rem; margin-bottom: .25rem;">Phone: &nbsp;</span> <span style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); font-size: 1rem; line-height: 1.5rem;">' . $data['phone'] . '</span>
                    </div>
                </div>
                <div class="sender-message" style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity));">
                    <div style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); font-size: 1.125rem; font-weight: 700; line-height: 1.75rem; margin-bottom: .25rem;">Message:</div>
                    <p style="border: 0 solid; box-sizing: border-box; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); --tw-border-opacity: 1; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; border-color: rgba(229,231,235,var(--tw-border-opacity)); margin: 0; font-size: 1rem; line-height: 1.5rem;">
                        ' . $data['message'] . '
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>';
    }
}
