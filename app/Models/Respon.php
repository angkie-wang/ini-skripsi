<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table = "respon_donatur"; 
    protected $primarykey = "id";
    protected $foreignkey = "id_donatur";

    public function donatur()
    {
    	return $this->belongsTo(Donatur::class);
    }
}
