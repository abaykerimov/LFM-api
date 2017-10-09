<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'ok';
});
//
//use Illuminate\Support\Facades\App;
//
//Route::get('/bridge', function() {
//    $pusher = App::make('pusher');
//    $pusher->trigger('my-channel', 'my-event', array('text' => 'Works!'));
//
//    return view('welcome');
//});
//
//use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
//use Illuminate\Support\Facades\Event;
//
//class TestEvent implements ShouldBroadcast
//{
//    public $text;
//
//    public function __construct($text)
//    {
//        $this->text = $text;
//    }
//
//    public function broadcastOn()
//    {
//        return ['test-channel'];
//    }
//}
//
//Route::get('/broadcast', function() {
//    event(new TestEvent('Broadcasting in Laravel using Pusher!'));
//
//    return view('welcome');
//});
//
//Route::get('notifications', 'NotificationController@index');
//Route::post('notifications/notify', 'NotificationController@notify');
//
//
//Route::get('/pusher', function() {
//    Event::fire(new App\Eve);
//
//    event(new App\Events\HelloPusherEvent('Hi there Pusher!'));
//    return "Event has been sent!";
//});