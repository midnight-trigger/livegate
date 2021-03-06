<?php

namespace App\Mail;

use App\Http\Controllers\ContactController;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Contact;
use App\Livehouse;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSent extends Mailable {
  use Queueable, SerializesModels;
  public $contact;
  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Contact $contact) {
      $this->contact = $contact;
  }

  /**
   * Build the message.
   *
   * @return $this
   */

  public function build() {
    return $this->from('junya4318@gmail.com')
      ->subject(" 【LiveGate】メッセージが届きました")
      ->view('contacts/mail')
      ->with(['contact' => $this->contact]);
  }
}
