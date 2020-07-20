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
                'clientId' => 'AaXZ0VegPbYvrZlygOXiaQ0nSYczaaFTBI48GH0u3F02FlWiJ1mUMoCgwcrutfw2J8nk-UIBllCoA4Ho',
                'secret'   => 'EBl6tUeqhnW_TIa57KOixE5zyfIiVvO6u3zXF5sltzR-S4i2OGlLhBoEhN_SI-3PHqbf1ArKNOgnz8rO',
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
        config([
            'global' => Setting::all([
                'name','value'
            ])
            ->keyBy('name') // key every setting by its name
            ->transform(function ($setting) {
                 return $setting->value; // return only the value
            })
            ->toArray()
        ]);
    }
}
