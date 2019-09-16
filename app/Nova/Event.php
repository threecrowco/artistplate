<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Country;

use Laravel\Nova\Http\Requests\NovaRequest;

class Event extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Event';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title',
        'date',
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
            ID::make()->sortable(),
            Text::make('Title')->sortable(),
            DateTime::make('Date')->sortable(),
            Text::make('Venue')->sortable(),
            Text::make('Location'),
            $this->addressFields(),
            Trix::make('Description'),
            Text::make('Url')->hideFromIndex(),
            Image::make('Image')->hideFromIndex(),
            Boolean::make('Featured')->hideFromIndex(),
            Boolean::make('Private')->hideFromIndex(),
            Boolean::make('Cancelled')->hideFromIndex(),
        ];
    }

    protected function addressFields()
    {
        return $this->merge([
            Place::make('Address', 'address_line_1')->hideFromIndex(),
            Text::make('Address Line 2')
                ->hideFromIndex(),
            Text::make('City')
                ->hideFromIndex(),
            Text::make('State')
                ->hideFromIndex(),
            Text::make('Postal Code')
                ->hideFromIndex(),
            Text::make('Suburb')
                ->hideFromIndex(),
            Country::make('Country')
                ->hideFromIndex(),
            Text::make('Latitude')
                ->hideFromIndex(),
            Text::make('Longitude')
                ->hideFromIndex(),
        ]);
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
