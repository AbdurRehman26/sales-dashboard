<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MarketDataImport;

class FileImportController extends Controller
{

	public function index(Request $request)
	{

		$markets = app('MarketRepository')->findByAll(false, 10, ['to_import' => true])['data'];

		$users = \App\User::where('user_type', 0)->get();

		return view('admin.import_data', compact('markets', 'users'));
	}


	public function import(Request $request)
	{
		Excel::import(new MarketDataImport, $request->file('file'));
	
		return redirect('admin/import');
	}

}
