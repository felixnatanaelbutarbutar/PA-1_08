<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datajemaat extends Model
{
    use HasFactory;

    //tidak membatasi file masuk ke database
    protected $guarded = [];
}
