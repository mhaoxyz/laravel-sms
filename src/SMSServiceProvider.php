<?php

namespace Mhaoxyz\Laravel\SMS;

use Illuminate\Support\ServiceProvider;

class SMSServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $this->mergeConfigFrom(__DIR__ . '/../to/config/courier.php', 'courier');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../to/config' => config_path(),
        ], 'mhaoxyz-sms');

//        $this->loadRoutesFrom(__DIR__ . '/../to/routes.php'); // 注册路由
//
//        $this->publishes([ // 发布包配置文件到根目录下的 config 目录
//            __DIR__ . '/../to/config/courier.php' => config_path('courier.php')
//        ]);
//
//        $this->loadMigrationsFrom(__DIR__ . '/to/migrations');
//
//        $this->loadTranslationsFrom(__DIR__ . '/to/translations', 'courier'); // 使用 trans('courier::messages.welcome');
//
//        $this->publishes([ // 如需发布翻译文件，使用此行
//            __DIR__ . '/to/translations' => resource_path('lang/vendor/courier'),
//        ]);
//
//        $this->loadViewsFrom(__DIR__ . '/to/views', 'courier'); // 使用 view('courire::admin');
//
//        $this->publishes([
//            __DIR__ . '/to/views' => base_path('resources/views/vendor/courier'),
//        ]);
//
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                ExampleCommand::class,
//            ]);
//        }
//
//        $this->publishes([
//            __DIR__.'/to/assets' => public_path('vendor/courier'),
//        ]);
    }
}