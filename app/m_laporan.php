<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_laporan extends Model
{
       protected $primaryKey = 'id_laporan';
       protected $table = 'tb_laporan';
       public function petani(){
		return $this->belongsTo(m_anggota::class,'id_petani');
	}
}
