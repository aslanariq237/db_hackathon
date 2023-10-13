<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $table = "requirement";
    protected $fillable = [
        "skill",
        "graduate",
        "experience"
    ];
    use HasFactory;
}
