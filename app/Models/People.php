<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /** @use HasFactory<\Database\Factories\PeopleFactory> */
    use HasFactory;

    public function phone(){
        return $this->hasOne(Phone::class, 'person_id');
    }
}
