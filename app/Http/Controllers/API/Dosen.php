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
    public $table = "tbdosen";
    public function index(Request $req)
    {
		$validateQueryString = [
			"per_page"		=> "bail|sometimes|numeric|min:1",
			"page"		=> "bail|sometimes|numeric|min:1",
			"sort"		=> ["bail","sometimes","regex:/[a-zA-Z0-9]{0,20}\|(asc|desc)/"]
	    ];
        $data = new \stdClass;
		$per_page = $req->query('per_page');
		$page = $req->query('page');
		$sort = $req->query('sort');
		
		$validator = \Validator::make($req->query(), $validateQueryString);
		if($validator->fails()){
			$data->error = $validator->errors();
			$data->status_code = "422";
		}else{
			if(isset($sort)) $sort = explode('|',$sort);
		
			$base_kueri = DB::table($this->table);
			$totalData = DB::table($this->table)->select(DB::raw('COUNT(1) as total'))->get()->first();
			
			if(isset($per_page) && !isset($page)) $page = 1;
			else if(!isset($per_page) && isset($page)) $per_page = 10;
			
			$kueri = $base_kueri->
				when($sort || !empty($sort), function ($query) use ($sort) {
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
			
			if(isset($per_page) || isset($page)){ // Jika di url ada per_page atau page, maka buat respon paginasi
				$lastPage = ceil($totalData->total/(int)$per_page);
			
				$queryStringNext = [
					"per_page"		=> $per_page,
					"page"			=> $page+1 <= 1 ? null : $page+1,
					"sort"			=> $sort
				];
				$queryStringPrev = [
					"per_page"		=> $per_page,
					"page"			=> $page-1 > $lastPage ? null : $page-1,
					"sort"			=> $sort
				];
				
				$data->pagination = [
					"per_page"		=> (int)$per_page,
					"current_page"	=> (int)$page,
					"from"			=> (($page-1)*$per_page)+1,
					"to"			=> ($page*$per_page),
					"last_page"		=> $lastPage,
					"next_page_url" => $queryStringNext['page'] == null ? null : strtok($_SERVER["REQUEST_URI"],'?').'?'.http_build_query($queryStringNext),
					"prev_page_url" => $queryStringPrev['page'] == null ? null : strtok($_SERVER["REQUEST_URI"],'?').'?'.http_build_query($queryStringPrev)
				];
			}
			$data->pagination['total'] = $totalData->total;
			$data->status_code = "200";
		}
		return response()->json($data, $data->status_code);
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
