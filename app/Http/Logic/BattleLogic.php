<?php
namespace App\Http\Logic;

class BattleLogic
{
  /**
   * 主人公のターン
   * @param  コマンドで選んだ文字列
   * @return 表示するメッセージ、金額
   */
  public function playerTurn(String $command)
  {
    $result_message = "";
    $result_price = 0;
    switch ($command) {
        case "買い向かう":
          $result_message = "買い向かった";
          $result_price = 10000;
        break;
        case "空売り":
          $result_message = "売り仕掛けた";
          $result_price = -10000;
        break;
        case "様子を見る":
          $result_message = "流れを見ている";
          $result_price = 0;
        break;
        case "撤退":
          $result_message = "手仕舞いした";
          $result_price = 0;
        break;
        
      }
      return [$result_message,$result_price];
  }
  /**
   * 敵のターン
   * 
   * @return 表示するメッセージ、金額
   */
  public function enemyTurn()
  {
    $result_message = "アルゴンはナイアガラを起こした！！";
    $result_price = 50000;
    return [$result_message,$result_price];
  }
}