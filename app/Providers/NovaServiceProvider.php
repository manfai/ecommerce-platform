<?php

namespace App\Providers;

use Davidpiesse\NovaToggle\Toggle;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use OptimistDigital\NovaSettings\NovaSettings;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        // Nova::serving(function (ServingNova $event) {
        //     app()->setLocale('en');
        // });


        NovaSettings::addSettingsFields([
            Toggle::make('Maintenance', 'maintenance')->trueColor('#E74444'),
            Text::make('URL', 'url'),
            Text::make('Title', 'title')->translatable(),
            Textarea::make('Description', 'description')->translatable(),
            Text::make('Address', 'address')->translatable(),
            KeyValue::make('Contact', 'contact'),
            KeyValue::make('Social Media', 'social_media'),
            Text::make('Copyright', 'copyright'),
            
            Heading::make('Operation'),
            Toggle::make('Allow Login', 'allow_login')->trueColor('#1446A0'),
            Toggle::make('Allow Registration', 'allow_registration')->trueColor('#1446A0'),
            KeyValue::make('Open Hour', 'open_hour'),
            Toggle::make('Allow Adoption', 'allow_adoption')->trueColor('#1446A0'),
        ],[
            'adoption' => 'boolean',
            'allow_login' => 'boolean',
            'allow_registration' => 'boolean',
            'maintenance' => 'boolean',
            'contact' => 'json',
            'social_media' => 'json',
            'open_hour' => 'json',
            'title' => 'json',
            'address' => 'json',
            'description' => 'json',
            // 'some_collection' => 'collection',
        ]);
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaSettings
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
