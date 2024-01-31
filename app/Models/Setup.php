<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    use HasFactory;

    protected $casts = [
        'socials' => 'array',
    ];


    protected $table = 'website_store';

    protected $fillable = [
        'id',
        'logo',
        'phone',
        'email',
        'address',
        'msg_phone',
        'msg_email',
        'socials',
    ];
}
