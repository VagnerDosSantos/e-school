<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinguaIndigena extends Model
{
    use HasFactory;
    protected $table = "linguas_indigenas";
    public $timestamps = false;
    protected $guarded = [];
}
