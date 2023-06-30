<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\Client\ContactMail;


class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    public $fillable = ['name', 'email', 'phone', 'subject', 'message', 'important', 'favorite', 'important', 'read'];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
    ];

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "david.villeda@kjota.com.mx";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
