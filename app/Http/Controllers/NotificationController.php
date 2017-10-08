<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return view('notification');
    }

    public function notify(Request $request)
    {
        $notifyText = e($request->input('notify_text'));
        return $notifyText;
        // TODO: Get Pusher instance from service container

        // TODO: The notification event data should have a property named 'text'

        // TODO: On the 'notifications' channel trigger a 'new-notification' event
    }
}
