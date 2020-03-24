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
          list($result_message,$result_price) = $this->player_buy();          
        break;
        case "空売り":
          list($result_message,$result_price) = $this->player_sell();
        break;
        case "様子を見る":
          list($result_message,$result_price) = $this->player_look();
        break;
        case "撤退":
          list($result_message,$result_price) = $this->player_run();
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
    $attack_no = rand(0,2);
    switch ($attack_no) {
      case 0:
        $result_price = rand(300,500) * 10000 * rand(4,9);
        $result_message = 
          "アルゴンはナイアガラを起こした！！\n相場が垂直落下した・・！！\n".$result_price."円の大損だ！！▼";
      break;
      case 1:
        $result_price = rand(50,200) * -10000 * rand(1,3);
        $result_message = 
          "アルゴンはコロナズンを唱えた！！\n世界がウイルスに恐怖する！！\n
          ".$result_price."円損した！！▼";
      break;
      case 2:
        $result_price = rand(300,500) * 10000 * rand(1,3);
        $result_message = 
          "アルゴンはコロナズンを唱えた！！\n 世界がウイルスに恐怖する！！\n
          トレイダは売り建ての玉を天にかざした！！ \n相場はアルゴンに跳ね返った！！\n".$result_price."円手に入れた！！▼";
      break;
    }
    return [$result_message,$result_price];
  }

  private function player_buy()
  {
    $attack_no = rand(0,1);
    switch ($attack_no) {
      case 0:
        $result_price = rand(100,500) * 10000;
        $result_message = "トレイダはナンピンした！！\n相場がV時回復！！\n".$result_price."円儲かった！！▼";
      break;
      case 1:
        $result_price = rand(20,100) * -10000;
        $result_message = 
          "トレイダはナンピンした！！\nアルゴンがサポートラインを切り裂いた！！\n
          相場は底抜けて下がりだした！！\n".$result_price."円損した！！▼";
      break;
    }

    return [$result_message,$result_price];
  }

  private function player_sell()
  {
    $attack_no = rand(0,1);
    switch ($attack_no) {
      case 0:
        $result_price = rand(500,800) * 10000 * rand(2,9);
        $result_message = 
          "トレイダは落ちるナイフで切りかかった！！\nアルゴンに会心の一撃！！\n".$result_price."円奪い取った！！▼";
      break;
      case 1:
        $result_price = rand(5,50) * -10000 * rand(1,3);
        $result_message = 
          "トレイダは落ちるナイフで斬りかかろう・・としてケガした！！\n「痛ってえぇxえぇ！！！」\n
          　治療費がかさんだ！！\n".$result_price."円損した！！▼";
      break;
    }
    return [$result_message,$result_price];
  }

    private function player_look()
    {
      $attack_no = rand(0,1);
      switch ($attack_no) {
        case 0:
          $result_price = rand(30,50) * 10000 * rand(3,7);
          $result_message = 
            "トレイダは全身の気を集中し流れを見ている・・！！\nと、その間に配当権利落ちしていた！！\n"
            .$result_price."円受け取った！！▼";
        break;
        case 1:
          $result_price = rand(50,100) * -10000 * rand(1,3);
          $result_message = 
            "アルゴンは身の毛もよだつ下げを演出した！！\nトレイダはすくんで損切りができない！！\n
            みるみる相場が下がっていく・・".$result_price."円損した！！▼";
        break;
      }
    return [$result_message,$result_price];
  }

  private function player_run()
  {
    $attack_no = rand(0,1);
    switch ($attack_no) {
      case 0:
        $result_price = rand(300,550) * -10000 * rand(2,9);
        $result_message = 
          "トレイダはポジションを解消しようとした！！\nアルゴン「知らなかったのか？大魔王からは逃げられない・・！！\n
          なんと相場がギャップダウンして解消できない！！"
          .$result_price."円の大損だ！！▼";
      break;
      case 1:
        $result_price = rand(100,200) * -10000 * rand(1,3);
        $result_message = 
          "トレイダの居合斬り！！\nアルゴンの財布を掠め取った！！\n
          ".$result_price."円抜き取った！！▼";
      break;
    }
  return [$result_message,$result_price];
}
}