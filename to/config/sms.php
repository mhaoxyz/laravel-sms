<?php
return [
    'access_key_id' => env('SMS_ACCESS_KEY_ID'),
    'access_key_secret' => env('SMS_ACCESS_KEY_SECRET'),
    'sign_name' => env('SMS_SIGN_NAME'),
    'product' => config('sms.sign_name'),
    'template_codes' => [
        'SMS_56665449' => [ // 验证码${code}，您正在尝试变更${product}重要信息，请妥善保管账户信息。
            'product' => env('SMS_PRODUCT', config('sms.product'))
        ],
        'SMS_56665450' => [ // 验证码${code}，您正在尝试修改${product}登录密码，请妥善保管账户信息。
            'product' => env('SMS_PRODUCT', config('sms.product'))
        ],
        'SMS_56665451' => [ // 验证码${code}，您正在参加${product}的${item}活动，请确认系本人申请。
            'product' => env('SMS_PRODUCT'),
        ],
        'SMS_56665452' => [ // 验证码${code}，您正在注册成为${product}用户，感谢您的支持！
            'product' => env('SMS_PRODUCT', config('sms.product')),
        ],
        'SMS_56665453' => [ // 验证码${code}，您正尝试异地登录${product}，若非本人操作，请勿泄露。
            'product' => env('SMS_PRODUCT', config('sms.product')),
        ],
        'SMS_56665454' => [ // 验证码${code}，您正在登录${product}，若非本人操作，请勿泄露。
            'product' => env('SMS_PRODUCT', config('sms.product')),
        ],
        'SMS_56665455' => [ // 尊敬的${customer}，欢迎您使用阿里大鱼短信服务，阿里大鱼将为您提供便捷的通信服务！
        ],
        'SMS_56665456' => [ // 验证码${code}，您正在进行${product}身份验证，打死不要告诉别人哦！
        ],
    ],
    'register_template_code' => env('SMS_REGISTER_TEMPLATE_CODE', 'SMS_56665452')
];