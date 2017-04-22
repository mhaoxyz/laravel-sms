<?php

namespace Mhaoxyz\Laravel\SMS;

use Mhaoxyz\Aliyuncs\SMS\SMS as AliyunSMS;

class SMS
{
    protected $aliyun_sms;

    public function __construct()
    {
        $access_key_id = config('sms.access_key_id');
        $access_key_secret = config('sms.access_key_secret');
        $this->aliyun_sms = new AliyunSMS($access_key_id, $access_key_secret);
        $this->aliyun_sms->setSignName(config('sms.sign_name'));
    }

    public function send($phone, $template_code, $paramStrings = [])
    {
        $paramStrings = array_merge(config('sms.template_codes.' . $template_code), $paramStrings);

        $this->aliyun_sms->setRecNum($phone);
        $this->aliyun_sms->setTemplateCode($template_code);
        $this->aliyun_sms->setParamStrings($paramStrings);

        return $this->aliyun_sms->send();
    }
}