<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{

    protected $table = 'dosen';
    protected $fillable = [
        'nidn', 'nama', 'status', 'jafung', 'pakar'
 ];
}