<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad_Mexico extends Model
{
    use HasFactory;

    protected $table = 'distrito_federal';
    protected $fillable = ['c_estadp'];

    public $timestamps = false;
}
