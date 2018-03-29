<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "tbdosen";
    protected $primaryKey = "id_dosen";
    public $timestamps = false;
    public function getRestApi($per_page = 10, $page = 1, $sort){
		$data = new \stdClass;		
		if(isset($sort)) $sort = explode('|',$sort);
		$base_kueri = DB::table($this->table);
		$kueri = $base_kueri->
			when($sort, function ($query) use ($sort) {
						return $query->orderBy($sort[0], substr($sort[1],0,4));
	                });
		$data = $kueri->paginate($per_page ?: 10);
		return $data;
	}
}
