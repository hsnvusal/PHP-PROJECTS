<?php namespace Vusal\Movies\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
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
    public $table = 'vusal_movies_genres';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];


    public $belongsToMany = [
        'movies' => [
            'Vusal\Movies\Models\Movie',
            'table'=> 'vusal_movies_movies_genres',
            'order' => 'name'
        ]
    ];

}
