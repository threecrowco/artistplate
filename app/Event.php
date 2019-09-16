<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use HasSlug;

    protected $guarded = [];

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
                ->generateSlugsFrom('title')
                ->saveSlugsTo('slug')
                ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // =================================|
    // -- RELATIONS
    // =================================|

    // Relations go here...

    // =================================|
    // -- SCOPES
    // =================================|

    // Scopes go here...


    // =================================|
    // -- ACCESSORS
    // =================================|

    // Accessors go here...


    // =================================|
    // -- MUTATORS
    // =================================|

    // Mutators go here



    // =================================|
    // -- Helpers
    // =================================|

    public function getExcerptAttribute()
    {
        return str_limit(strip_tags($this->description), 140);
    }

}
