<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Два разных текста на одной строке</title>
  <style>
   .leftstr, .rightstr {
    float: left; /* Обтекание справа */ 
    width: 50%; /* Ширина текстового блока */ 
   }
   .rightstr {
    text-align: right; /* Выравнивание по правому краю */ 
   }
  </style>
 </head>
 <body>
  <p class="leftstr">Строка один</p>
  <p class="rightstr">Строка два</p>
  <div style="clear: left"></div>
 </body>
</html>