<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'fName',
        'lName',
        'gender',
        'maritalStatus',
        'address1',
        'address2',
        'city',
        'DOB',
        'resignationDate',
        'contactNo',
        'email',
        'staffID',
        'payNo',
        'designation',
        'division'
    ];
}
