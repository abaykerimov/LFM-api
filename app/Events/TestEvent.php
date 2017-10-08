<?php
/**
 * Created by PhpStorm.
 * User: Абай
 * Date: 07.10.2017
 * Time: 21:57
 */

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TestEvent implements ShouldBroadcast
{
    public $test;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function broadcastOn()
    {
        return ['test-channel'];
    }
}