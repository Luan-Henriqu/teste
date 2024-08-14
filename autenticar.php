<?php
 $logininformado = $_POST["login"];
 $senhainformada = $_POST["senha"];
 $logincorreto = "admin";
 $senhacorreta = "admin";


 if ($logininformado == $logincorreto && $senhainformada == $senhacorreta)
  {
    header("location: coconut/index.html");
}
else {
    header("location: erro.html");
 }
        
?>