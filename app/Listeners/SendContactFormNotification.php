<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use App\Models\ContactForm;
use App\User;

class SendContactFormNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param ContactFormSubmitted $event
     */
    public function handle(ContactFormSubmitted $event)
    {
//        $admin = User::first();
//        $admin->notify(new \App\Notifications\ContactFormSubmitted($event->contactForm));

//        $invoice = ContactForm::latest()->first();
        $event->contactForm->notify(new \App\Notifications\ContactFormSubmitted($event->contactForm));

//        Notification::route('mail', 'taylor@example.com')
//            ->route('nexmo', '5555555555')
//            ->notify(new InvoicePaid($invoice))
//        ;
    }
}
