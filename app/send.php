<?php
$cl_name   = htmlspecialchars($_GET['name']);
$cl_phone   = htmlspecialchars($_GET['phone']);
$phrase = htmlspecialchars($_GET['phrase']);
$referer = htmlspecialchars($_GET['referer']);
 
 $to  = 'text@mail.ru'; 
$subject = 'Получение коктейля - '.$cl_phone.'';
 
// текст письма
$message = '
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Заявка с сайта</title>
    </head>
    <body>
      <p>имя.:'.$cl_name.'</p>
      <p>тел.:'.$cl_phone.'</p>
      <br>
      <p>Источник.:'.$referer.'</p>
      <p>Фраза.:'.$phrase.'</p>
    </body>
</html>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: London_club' . "\r\n";
 
if (mail($to, $subject, $message, $headers)) {
     ?>
    <script>
        window.alert("Message send!");
    </script>
    <?
}
else {
    ?>
    <script>
        window.alert("Error. Message do not send");
    </script>
    <?    } ?>
 
<script type="text/javascript">
    window.location = "thanks.html"
</script>