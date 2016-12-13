<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_anggota extends Model
{
    protected $primaryKey = 'id_anggota';
    protected $table = 'tb_anggota';
    public function scopeAnggota($query) {
		return $query->where('status', 'petani');
	}
	public $timestamps = false;
}
