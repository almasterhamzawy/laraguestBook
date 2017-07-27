<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Messages;
class adminMessagesController extends Controller
{
    public function getIndex()
    {
        $messages = Messages::all();

        return view('admin.messages')
            ->with('messages',$messages);
    }


    public function getDelete($id=0)
    {
        $message = Messages::find($id);
        if(!$message)
            bort(404);

        $message->delete();

        return redirect('admin/messages');
    }


    public function getUpdate($id=0)
    {
        $message = Messages::find($id);
        if(!$message)
            bort(404);

        return view('admin.updateMessage')
            ->with('message',$message);
    }


    public function postUpdate()
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
            $id = \Input::get('id');
            $message = Messages::find($id);

            $message->title = \Input::get('title');
            $message->content = \Input::get('content');
            $message->name = \Input::get('name');
            $message->email = \Input::get('email');

            $message->save();

            return redirect('admin/messages')
                ->with('message','updated Successfully');
        }
        else
        {
            return redirect()
                ->back()
                ->with('errors',$validator->errors()->all());
        }
    }


} 