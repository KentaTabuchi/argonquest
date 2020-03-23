<?php
namespace App\Http\Logic;

class BattleLogic
{
  /**
   * 主人公のターン
   * @return 表示するメッセージ
   */
  public function playerTurn(String $command)
  {
    $result_message = "";
    switch ($command) {
        case "買い向かう":
          $result_message = "買い向かった";
        break;
        case "空売り":
          $result_message = "売り仕掛けた";
        break;
        case "様子を見る":
          $result_message = "流れを見ている";
        break;
        case "撤退":
          $result_message = "手仕舞いした";
        break;
        
      }
      return $result_message;
    
  }
}