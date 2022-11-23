<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    @vite(['resources/css/mail.css'])
</head>

<body>
    <div class="body-mail">
        <div class="contact-form ">
            <div class="mail-header">
                <span>{{config('info.mail_subject')}}</span>
            </div>
            <div class="mail-body">
                <div class="sender-info">
                    <div>
                        <span>name:</span> <span>{{$info['name']}}</span>
                    </div>
                    <div>
                        <span>email:</span> <span>{{$info['email']}}</span>
                    </div>
                    <div>
                        <span>phone:</span> <span>{{$info['phone']}}</span>
                    </div>
                </div>
                <div class="sender-message">
                    <div>Message:</div>
                    <p>
                        {{$info['message']}}
                    </p>
                </div>
            </div>


        </div>
    </div>


    </div>
    </div>
</body>

</html>
