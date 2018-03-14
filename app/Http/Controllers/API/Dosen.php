<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Dosen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $tablePk = 'nidn';
    public function index(Request $req)
    {
        $data = new \stdClass;
		$per_page = $req->query('per_page');
		$page = $req->query('page');
		
		$sort = $req->query('sort');
		if(isset($sort)) $sort = explode('|',$sort);
		
		$base_kueri = DB::table('tbdosen');
		$totalData = DB::table('tbdosen')->select(DB::raw('COUNT(1) as total'))->get()->first();
		
		if(isset($per_page) && !isset($page)) $page = 1;
		else if(!isset($per_page) && isset($page)) $per_page = 10;
		
		$kueri = $base_kueri->
			when($sort, function ($query) use ($sort) {
						return $query->orderBy($sort[0], substr($sort[1],0,4));
	                })->
			when($per_page, function ($query) use ($per_page) {
						$page = 1;
						return $query->limit($per_page)->offset(0);
	                })->
			when($page, function ($query) use ($page) {
						$per_page = 10;
						return $query->limit(10)->offset((int)(10 * ($page-1)));
	                });
	                
		$data->data = $kueri->get();
		
		$data->pagination = [
			"total"			=> $totalData->total,
			"per_page"		=> (int)$per_page,
			"current_page"	=> (int)$page,
			"from"			=> (($page-1)*$per_page)+1,
			"to"			=> ($page*$per_page)
		];
		return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
