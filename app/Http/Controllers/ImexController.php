<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\ImportUsers;
use App\Models\Report_view;
use Maatwebsite\Excel\Facades\Excel;

class ImexController extends Controller
{
     public function importExport()
    {
       return view('import');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }


    public function import() 
    {
        $model = new Report_view;
        $model->truncate();
        Excel::import(new ImportUsers, request()->file('file'));
            
        return back();
    }
}