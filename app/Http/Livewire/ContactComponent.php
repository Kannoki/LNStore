<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $subject;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'comment' => 'required',
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'comment' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'Thank you for your Feedback!');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout("layouts.base");
    }
}