<?php

namespace Mhaoxyz\Laravel\SMS;

class RegisterSMS
{
    protected $sms;

    public function __construct()
    {
        $this->sms = new SMS();
    }

    public function send($phone)
    {
        $code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $paramStrings = [
            'code' => $code
        ];

        $result = $this->sms->send($phone, config('sms.register_template_code'), $paramStrings);

        return empty($result) ? false : $code;
    }
}