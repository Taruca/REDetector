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

    public function upload() {
        $userName = Auth::user()->id;
        if (Input::hasFile('rnaVcfFile')) {
            $fileRNA = Input::file('rnaVcfFile');
            if($fileRNA->isValid()) {
                /*$clientName = $file->getClientOriginalName();
                $tmpName = $file->getFileName();
                $realPath = $file->getRealPath();
                $entension = $file->getClientOriginalExtension();
                $mimeType = $file->getMimeType();*/
                $newName = $userName . '_rna.vcf';
                /*$path = */
                $fileRNA->move('../storage/vcf_file', $newName);
                redirect('/');
            }
        } elseif(Input::hasFile('dnaVcfFile')) {
            $fileDNA = Input::file('dnaVcfFile');
            if($fileDNA->isValid()) {
                $newName = $userName . '_dna.vcf';
                /*$path = */
                $fileDNA->move('../storage/vcf_file', $newName);
                redirect('/');
            }
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

    public function download($table)
    {
        //dd($table);
        $tableNameArray = explode('_', $table);
        $tableName = $tableNameArray[1] ."_" .$tableNameArray[4];
        $filePath = "../storage/resultFiles";
        $fileName = $filePath .'/' .$tableName .".txt";
        $sqlClause = 'select * from ' .$table;
        $rs = DB::select($sqlClause);
        if(is_dir($filePath)) {
            $fp = fopen($fileName, 'w');
            $firstLine = "#CHROM    POS    ID    REF    ALT    QUAL    FILTER    INFO    GT    AD    DP    GQ    PL    alu";
            file_put_contents($fileName, $firstLine ."\r\n",FILE_APPEND);
            foreach ($rs as $r) {
                $tString = "";
                foreach($r as $key=>$content) {
                    switch ($key) {
                        case 'CHROM':
                            //填充字符串
                            $content = str_pad($content, 8);
                            break;
                        case 'POS':
                            $content = str_pad($content, 12);
                            break;
                        case 'ID':
                            $content = str_pad($content, 4);
                            break;
                        case 'REF':
                            $content = str_pad($content, 4);
                            break;
                        case 'ALT':
                            $content = str_pad($content, 4);
                            break;
                        case 'QUAL':
                            $content = str_pad($content, 18);
                            break;
                        case 'FILTER':
                            $content = str_pad($content, 8);
                            break;
                        case 'INFO':
                            $content = str_pad($content, 172);
                            break;
                        case 'GT':
                            $content = str_pad($content, 8);
                            break;
                        case 'AD':
                            $content = str_pad($content, 8);
                            break;
                        case 'DP':
                            $content = str_pad($content, 4);
                            break;
                        case 'GQ':
                            $content = str_pad($content, 8);
                            break;
                        case 'PL':
                            $content = str_pad($content, 12);
                            break;
                        case 'alu':
                            break;
                        default:
                            break;
                    }
                    $tString = $tString .$content;
                }
                file_put_contents($fileName, $tString ."\r\n", FILE_APPEND);//以追加方式写入数据
            }
            fclose($fp);
        } else {
            echo "Download failed, please try again.";
        }
        //dd($fileName);
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
