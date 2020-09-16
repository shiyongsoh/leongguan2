<?php

namespace App\Mail;

use App\Models\sendRedeemMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RedeemTrialPack extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $kioskCode = mt_rand(100000, 999999);
        $saveCode = sendRedeemMail::latest()->first();

        return $this->view('giveKioskCode')->with('kioskCode',$saveCode->kioskCode);
    }
}
