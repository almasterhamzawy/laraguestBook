<?php

namespace App\Http\Controllers;

use App\Models\Messages;

class messagesController extends Controller
{
    public function getIndex()
    {
        $messages = Messages::all();
        return view('front.guestbook')
            ->with('title','Guest Book')
            ->with('messages',$messages);
    }


    public function postAdd()
    {
        $rules = array(
         "title" => "required|min:3|max:200",
          "content" => "required|min:10",
          "name" => "required|min:3",
          "email" => "required|email"
        );

        $validator = \Validator::make(\Input::all(),$rules);
        if($validator->passes())
        {
            //db
            $message = new Messages();

            $message->title = \Input::get('title');
            $message->content = \Input::get('content');
            $message->name = \Input::get('name');
            $message->email = \Input::get('email');

            $message->save();

            return redirect('messages')
                ->with('message','Added Successfully');
        }
        else
        {
            return redirect('messages')
                ->with('errors',$validator->errors()->all());
        }

    }
} 