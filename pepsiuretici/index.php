<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pepsi Kod Üretici</title>
</head>
<body>
  <center>
<div class="form">
  <p>
<font size="20" face="Verdana">
  Pepsi Kod Üretici
  <form method="GET" >
<input id="pswBox" placeholder="" type="text">
<input type="button" value="Kod Üret" onclick="randomPsw('10','pswBox');">  
  <script>
    function randomPsw(len , rnd) {
    var character = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    var lengthPsw = len;
    var randomPsw = '';
    for (var i=0; i < lengthPsw; i++) {
      var numPws = Math.floor(Math.random() * character.length);
      randomPsw += character.substring(numPws,numPws+1);
    }
    document.getElementById(rnd).value = randomPsw;
    }
  </script>
</center>
</div>
<link rel="stylesheet" type="text/css" href="https://shadokiller.repl.co/pepsiuretici/style.css">
    <center><font size="3">Designed by  <a href="https://bit.ly/ardadasdelen" target="_blank">Arda Daşdelen</a> </center>
</body>
</html>