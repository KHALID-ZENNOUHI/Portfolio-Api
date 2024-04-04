<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'personal_information';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'address',
        'city',
        'country',
    ];
}
