<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    protected $fillable = [
        'newsletter_email',
    ];

    protected $primaryKey = 'newsletter_id';
}
