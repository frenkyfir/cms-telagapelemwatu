<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;



class Post extends Model
{
    use HasFactory;


    protected $guarded = [];

    protected $dates = [
        'created_at',
    ];



    public function getDueDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-y');
    }

    public function user()
    {
        #1 user have 1 ticket
        return $this->belongsTo(User::class);
    }
}
