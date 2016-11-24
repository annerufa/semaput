<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_laporan extends Model
{
       protected $primaryKey = 'id_laporan';
       public function petani(){
		return $this->belongsTo(m_anggota::class,'id_petani');
	}
}
