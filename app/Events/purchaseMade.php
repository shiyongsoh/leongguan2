<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use Auth;
use App\Models\orderedItems;
class purchaseMade implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $actionId;
    public $actionData;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $firstname;
    public function __construct()
    {
        // $this->actionId = $actionId;
        // $this->actionData = $actionData;
        $this->firstname;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('leongguan');
    }
    public function broadcastWith()
    {
        $user = Auth::User();
        $products = orderedItems::select("*")
        ->join('products','products.id','=','ordered_items.productID')
        ->join('users','users.id','=','ordered_items.userid')
        ->where('ordered_items.userid',$user->id)
        ->where('status',null)->get();
        return [$products];
        // return [
        //     'actionId' => $this->actionId,
        //     'actionData' => $this->actionData,
        // ];
    }
    public function broadcastAs()
    {
        return 'purchaseMade';
    }
}
