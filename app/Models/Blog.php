<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function schedule() {
        return $this->hasOne(Schedule::class);
    }
}