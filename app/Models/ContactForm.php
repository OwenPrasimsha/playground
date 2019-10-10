<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravolt\Suitable\AutoSort;

class ContactForm extends Model
{
    use Notifiable;
    use AutoSort;
    protected $guarded = [];
}
