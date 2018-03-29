<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contoh extends Controller
{
    public function index(){
		$data = [];
		$data['sidebar'] = [
			"listMenu"=> [
				[
					"url"	=> "/contoh/blade",
					"icon"	=> "fa fa-laptop",
					"text"	=> "Contoh Menu"
				]
			]
		];
		$data['form'] = [
			"fields"	=>	[
								[
									"name"	=> "nm_dosen",
									"type"	=> "input",
									"inputType"	=> "text",
									"label"		=> "Nama Dosen",
									"placeholder" => "Nama Dosen"
								],
								[
									"name"	=> "id_kelas",
									"type"	=> "select",
									"label"		=> "Kelas",
									"placeholder" => "Kelas",
									"optionLabel" => "nm_kelas",
									"optionValue" => "id_kelas",
									"options" => [
										["id_kelas"=>1,"nm_kelas"=>"SI-1"],
										["id_kelas"=>2,"nm_kelas"=>"SI-2"],
										["id_kelas"=>3,"nm_kelas"=>"SI-3"],
										["id_kelas"=>4,"nm_kelas"=>"SI-4"],
										["id_kelas"=>5,"nm_kelas"=>"SI-5"],
										["id_kelas"=>6,"nm_kelas"=>"SI-6"]
									]
								],
								[
									"name"	=> "deskripsi",
									"type"	=> "textarea",
									"label"		=> "Keterangan",
									"placeholder" => "Detail"
								]
								
							],
			"model"		=>	[
								"nm_dosen"	=> null,
								"id_kelas"	=> null,
								"deskripsi"	=> null
							],
			"error"		=>	[
								"nm_dosen"	=> null,
								"id_kelas"	=> null,
								"deskripsi"	=> null
							]
		];
		$data['table'] = [];
		$data['table']['fields'] = [
								[
									"name"	=>	"nm_dosen",
									"title"	=>	"Nama Dosen"
								],
								[
									"name"	=>	"nidn",
									"title"	=>	"NIDN"
								]
							];
		$data['table']['data'] = [
			["nm_dosen"=>"Dosen 1","nidn"=>"131321312"],
			["nm_dosen"=>"Dosen 1","nidn"=>"131321312"],
			["nm_dosen"=>"Dosen 1","nidn"=>"131321312"],
			["nm_dosen"=>"Dosen 1","nidn"=>"131321312"],
			["nm_dosen"=>"Dosen 1","nidn"=>"131321312"]
		];
		return view('contohhalamanblade', $data);
	}
}
