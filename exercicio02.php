<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $a = isset($_GET["ano"]) ?$_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "Voce nasceu em $a e terá $i anos.<br/>";
    if ($i < 16) {
      $tipoVoto = "nao vota";

    }
    else {
      if ($i >= 16 && $i < 18) {
        $tipoVoto = "voto opcional";

      }
      else {
        $tipoVoto = "voto obrigatorio";

      }
    }
    echo " Para essa idade, $tipoVoto";
        
    ?>
    
</div>
</body>
</html>