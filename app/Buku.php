<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    
    public function jenis_buku()
    {
    	return $this->belongsTo(JenisBuku::class)->withDefault();
    }
}
