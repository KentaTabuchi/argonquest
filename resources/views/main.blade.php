<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/windows.css">
  <link rel="stylesheet" type="text/css" href="css/text.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <script type="text/javascript" src="js/command.js"></script>
  <title>Document</title>
</head>
<body>
  <div class="win-backscreen">
    <div class="win-wallet">
      <p class="text-wallet">¥{{$wallet}}</p>
    </div>
    <div class="win-enemyimage">
      <img src="image/fantasy_maou_devil.png">
    </div>
    @if($windowflg['win_command'])
    <div class="win-command">
      <form name="command_form" action="onCommandClick">
        @csrf
      <ul>
        <li class="text-command" onclick="command_click(this.innerText);">買い向かう</li>
        <li class="text-command" onclick="command_click(this.innerText);">空売り</li>
        <li class="text-command" onclick="command_click(this.innerText);">様子を見る</li>
        <li class="text-command" onclick="command_click(this.innerText);">撤退</li>
      </ul>
      <input type="hidden" name="hdnCommandValue" id="commandValue" value="">
    </form>
    </div>
    @endif
    
    @if(!$windowflg['win_message'])
    <form name="message_form" action="onMessageClick">
    <div class="win-message" onclick="message_click();">
          @csrf
        <p class="text-message">{!! nl2br($message) !!}</p>
    </div>
    </form>
    @else
    <div class="win-message">
        <p class="text-message">{!! $message !!}</p>
    </div>
    @endif
    
  </div>
</body>
</html>