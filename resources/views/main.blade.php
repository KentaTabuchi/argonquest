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
      <p class="text-wallet">¥</p>
    </div>
    <div class="win-enemyimage">
      <img src="image/fantasy_maou_devil.png">
    </div>
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
    <div class="win-message">
    </div>
  </div>
</body>
</html>