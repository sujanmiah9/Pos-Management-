<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function backup(){
        return view(('backup.backup'));
    }
    public function generalSetting(){
        return view('backup.generalSetting');
    }
    public function help(){
        return view('backup.help');
    }
}
