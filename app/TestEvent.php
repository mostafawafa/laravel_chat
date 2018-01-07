<?php
/**
 * Created by PhpStorm.
 * User: ub
 * Date: 04/01/18
 * Time: 05:24 م
 */

namespace App;


use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TestEvent implements  ShouldBroadcast
{

    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function broadcastOn()
    {
        return ['test-channel'];
    }


}