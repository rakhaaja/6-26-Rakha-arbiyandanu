<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Contact extends Model
{

    protected $table = 'contacts';
    Protected $primarykey = 'id';
    protected $fillable = ['id', 'nama', 'email', 'pesan'];
   
}
