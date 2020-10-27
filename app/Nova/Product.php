<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Nikaia\Rating\Rating;
use Spatie\TagsField\Tags;
use Laravel\Nova\Fields\MorphToMany;
use NovaAttachMany\AttachMany;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\Models\\Product';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            // ID::make()->sortable(),
            Text::make('Code')
            ->sortable()
            ->rules('required', 'max:255'),
            AttachMany::make('Categories'),
            Image::make('Image'),
            Text::make('Title')
            ->rules('required', 'max:255')->translatable(),
            Text::make('Currency')
            ->sortable()
            ->rules('required', 'max:3'),
            Number::make('Price')->min(1)->step(0.01),
            Number::make('Cost')->min(1)->step(0.01),
            Boolean::make('On Sale'),
            Rating::make('Rating')->withStyles([
                'star-size' => 20,
                'active-color' => 'var(--primary)', // Primary nova theme color.
                'inactive-color' => '#d8d8d8',
                'border-color' => 'var(--60)',
                'border-width' => 0,
                'rounded-corners' => true,
                'inline' => false,
                'glow' => 0,
                'glow-color' => '#fff',
                'text-class' => 'inline-block text-50 h-9',
            ])->min(0)->max(5)->increment(0.5),
            Tags::make('Tags')->type('product'),
            HasMany::make('Skus','skus','App\Nova\ProductSku')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
