<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table = "donatur"; 

    public function respon_donatur()
    {
    	return $this->hasOne(Respon::class);
    }
}
