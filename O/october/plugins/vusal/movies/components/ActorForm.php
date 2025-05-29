<?php namespace Vusal\Movies\components;


use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Log;
use October\Rain\Support\Facades\Mail;
use Vusal\Movies\Models\Actor;

class ActorForm extends  ComponentBase
{
    public function  componentDetails()
    {
        return [
            'name' => 'Actor Form',
            'description' => 'Enter Actors'
        ];
    }

    public  function  onSave()
    {

        $actor = new Actor();

        $actor->name = \Input::get('name');
        $actor->lastname = \Input::get('lastname');
        $actor->save();

        \Flash::success('Actor added!');

        return \Redirect::back();




    }
}
