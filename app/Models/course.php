<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'courses';
    protected $timestamp = true;
    use HasFactory;
}
