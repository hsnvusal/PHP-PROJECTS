<?php namespace Vusal\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'vusal_movies_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
//    protected  $jsonable = ['actors'];


    public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'genres' => [
            'Vusal\Movies\Models\Genre',
            'table'=> 'vusal_movies_movies_genres',
            'order' => 'genre_title'
        ],
        'actors' => [
            'Vusal\Movies\Models\Actor',
            'table'=> 'vusal_movies_actors_movies',
            'order' => 'name'
        ]
    ];

}
