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
        $message = "魔王アルゴンが現れた。\nどうする？  ▼";
        return view('main',compact('message'));
    }
    /**
     * コマンドを選んだ時に発動。
     */
    public function onCommandClick(Request $request){
        $logic = new BattleLogic(); 
        $command = $request->hdnCommandValue;
        list($message,$price) = $logic->playerTurn($command);
        $windowflg = ['win_command' => false ,'win_message' =>false];
        return view('main',compact('message','windowflg'));
    }
    /**
     * メッセージ送りボタンをクリック時に発動。
     */
    public function onMessageClick()
    {
        $logic = new BattleLogic(); 
        list($message,$price) = $logic->EnemyTurn();
        $windowflg = ['win_command' => true ,'win_message' =>true];
        return view('main',compact('message','windowflg'));

    }
}
