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
    public function get_init(Request $request)
    {
        $message = "魔王アルゴンが現れた。\nどうする？  ▼";
        $wallet = 90000000000;
        $request->session()->put('wallet',$wallet);
        $windowflg = ['win_command' => true ,'win_message' =>false];
        return view('main',compact('message','windowflg','wallet'));
    }
    /**
     * コマンドを選んだ時に発動。
     */
    public function onCommandClick(Request $request){
        $logic = new BattleLogic(); 
        $command = $request->hdnCommandValue;
        list($message,$price) = $logic->playerTurn($command);
        $wallet = $request->session()->get('wallet');
        $wallet += $price;
        $request->session()->put('wallet',$wallet);
        $windowflg = ['win_command' => false ,'win_message' =>false];
        return view('main',compact('message','windowflg','wallet'));
    }
    /**
     * メッセージ送りボタンをクリック時に発動。
     */
    public function onMessageClick(Request $request)
    {
        $logic = new BattleLogic(); 
        list($message,$price) = $logic->EnemyTurn();
        $wallet = $request->session()->get('wallet');
        $wallet += $price;
        $request->session()->put('wallet',$wallet);
        $windowflg = ['win_command' => true ,'win_message' =>true];
        return view('main',compact('message','windowflg','wallet'));

    }
}
