<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Logic\BattleLogic;

class MainController extends Controller
{
    /**
     * スタート時に発動。
     */
    public function get_init()
    {
        $message = "アルゴンが現れた。\nどうする？  ▼";
        $message = nl2br($message);
        return view('main',compact('message'));
    }
    /**
     * コマンドを選んだ時に発動。
     */
    public function onCommandClick(Request $request){
        $logic = new BattleLogic(); 
        $command = $request->hdnCommandValue;
        $message = $logic->playerTurn($command);
        return view('main',compact('message'));
    }
}
