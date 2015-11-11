<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home');
    }

    //�ļ����ͻ�δ����
    public function upload()
    {
        $file = Input::file('rnaVcfFile');
        if($file->isValid()) {
            /*$clientName = $file->getClientOriginalName();
            $tmpName = $file->getFileName();
            $realPath = $file->getRealPath();
            $entension = $file->getClientOriginalExtension();
            $mimeType = $file->getMimeType();*/
            $userName = Auth::user()->id;
            $newName = $userName . '_rna.vcf';
            $path = $file->move('../storage/vcf_file', $newName);
            redirect('/');
        }
    }

    public function tables()
    {
        $userTables = Auth::user()->tables;
        $tables = explode('/', $userTables);
        $table1 = $tables[0];
        $tableElse = array_slice($tables, 1); //delete the first element of $tables
        $tableContents = array();
        $tableContents[0] = DB::table($table1)->get();
        for ($i = 0; $i < count($tableElse); $i ++) {
            $tableElseContents[$i] = DB::table($tableElse[$i])->get();
        }

        return view('/files', compact('table1', 'tableElse', 'tableContents', 'tableElseContents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
