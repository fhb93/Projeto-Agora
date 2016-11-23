<html lang="pt-br"> <meta charset="utf-8">
<head>
<title>Quest</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">

<!--
body { background-image: url(assets/Background2.png); background-size: 100%; background-repeat: no-repeat; white-space: nowrap; }
.scroll { background-image: url(assets/ancient-scroll.png); width: 500px; height: 500px; background-size: 80%; background-repeat: no-repeat; position: absolute; overflow: auto; }
.answer{ padding-left: 26% ; padding-top: 30%; width: 250px; height: 250px; font-size: 25pt; overflow: hidden; color: darkgreen; }
.question { padding-left: 45%; padding-top: 10%;}
.btnProx { position: relative; margin-left: 5%; margin-top: 30%; width: 150px; height:50px }
-->
</style>

<?php 
 // define variables and set to empty values
$answer = $answerErr = "";
$acc = 1;
$correct = array(
     "Opcao1", 
     "Opcao2", 
     "Opcao3"
);

?>
<body>
<div class="scroll">
<form class="answer" action="Questionario.php" method="post">
  <input type="radio" name="answer" value="Opcao1"> Opção 1  <br>
  <input type="radio" name="answer" value="Opcao2"> Opção 2  <br>
  <input type="radio" name="answer" value="Opcao3"> Opção 3  <br><br>
  <input type="submit" name="send" value="Enviar">
</form>
</div>




<?php    
srand();
$rand = rand(0, 2);
// echo $rand;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["answer"])) {
         $answerErr = "Resposta Vazia!";
    } else {
        $answer = test_input($_POST["answer"]); 
    }
}

function test_input($data) {
 
 if (isset($data)) 
 {
    // echo "<br><b>Você escolheu: $data</b>";
    
    if($correct[$rand] == $data) {
       echo "<br><b>acertou!</b>";
       $acc++;
    }
    else {
       echo "<br><b>errou!</b>";
    }
   
  }
  return $data;
}

?>
<div class="question">
<h2>Perguntas</h2>
<p> <?php echo "Este espaço é dedicado às perguntas..."; ?> </p>
</div>
<div class="btnProx"> 
 <form action="http://45.56.66.69/agora/index.php">
    <input type="submit" name="toHome" value="Página Inicial">
</form>
</div>
</body>
</html>



