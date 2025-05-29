<?php namespace Vusal\Contact\components;


use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Log;
use October\Rain\Support\Facades\Mail;

class ContactForm extends  ComponentBase
{
    public function  componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple Contact Form'
        ];
    }

    public  function  onSend()
    {

        $validator = \Validator::make(
          [
              'name'=>\Input::get('name'),
              'email'=>\Input::get('email')
          ]  ,
          [
                'name'=>'required|min:5',
                'email'=>'required|email'
          ]
        );

        if ($validator->fails())
        {
            return ['#result'=>$this->renderPartial('contactForm::messages',[
                'errorMsgs'=> $validator->messages()->all(),
                'fieldMsgs'=> $validator->messages()
                ])];
        }
        else {
            $vars = ['name'=>\Input::get('name'),'email'=>\Input::get('email'),'content'=>\Input::get('content')];



            Mail::send('vusal.contact::mail.message',$vars,function ($message)
            {
                $message->to('vusalhesenov361@gmail.com','Admin Person');
                $message->subject('New message from  contact form');
            });
        }



    }
}
