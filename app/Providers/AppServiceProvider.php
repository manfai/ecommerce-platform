<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Omnipay\Omnipay;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        // 往服务容器中注入一个名为 paypal 的单例对象
        $this->app->singleton('paypal', function (){
            $gateway = \Omnipay\Omnipay::create('PayPal_Rest');
            // $gateway->setUsername('sb-tlzxm237676_api1.business.example.com');
            // $gateway->setPassword('MXBMBJ8GQKQYRQ2P');
            $gateway->initialize(array(
                'clientId' => 'AQGqFUFWcP7slpO8qrSDKz-fVSzjUa1HS60Z3CJvZ6vhdWxheIxhVJnbfB81baNWQL_A1PI8SKjopuyO',
                'secret'   => 'EFCh4zfO1Ncvzxj0lZMdVkjBQzaDvRPenAKDhMdLQsqLc1iRa0slHTK4s25pRylMnZ8sXkYfnA8L2rjs',
                'testMode' => true, // Or false when you are ready for live transactions
            ));
            return $gateway;
        });
        
        // $this->app->singleton('stripe', function (){
        //     $gateway = \Omnipay\Omnipay::create('PayPal_Express');
        //     $gateway->setUsername('manfai106-facilitator@gmail.com');
        //     $gateway->setPassword('asdqwe123');
        //     return $gateway;
        // });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(\Illuminate\Support\Facades\Schema::hasTable('settings')){
            config([
                'global' => Setting::all([
                    'key','value'
                ])
                ->keyBy('key') // key every setting by its name
                ->transform(function ($setting) {
                    return $setting->value; // return only the value
                })
                ->toArray()
            ]);
        }
    }
}
