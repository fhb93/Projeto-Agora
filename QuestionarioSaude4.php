<html lang="pt-br"> <meta charset="utf-8">
<head>
<title>Quest</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">

<!--
body { background-image: url(assets/Background2.png); background-size: 100%; background-repeat: no-repeat; white-space: normal; padding-bottom: 10px; }
.scroll { background-image: url(assets/ancient-scroll.png); width: 500px; height: 500px; background-size: 80%; background-repeat: no-repeat; position: absolute; overflow: auto; }
.answer{ padding-left: 26% ; padding-top: 30%; width: 250px; height: 250px; font-size: 25pt; overflow: hidden; color: darkgreen; }
p { font-size: 15pt; padding-left: 5%; padding-top: -20px; padding-right: 10%;}
.question { padding-left: 45%; padding-top: 10%;}
.btnProx { position: relative; margin-left: -150px; margin-top: -50px; width: 10px; height:5px }
-->
</style>
</head>

<body>
<div class="scroll">
<form class="answer" action="QuestionarioSaude1.php" method="post">
  <input type="radio" name="answer" value="1"> Opção 1  <br>
  <input type="radio" name="answer" value="2"> Opção 2  <br>
  <input type="radio" name="answer" value="3"> Opção 3  <br>
  <input type="radio" name="answer" value="4"> Opção 4  <br><br>
  <input type="submit" name="send" value="Enviar">
</form>
</div>




<?php    


 // define variables and set to empty values


// echo $rand;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    if (empty($_POST["answer"])) {
         $answerErr = "Resposta Vazia!";
    } else {
        // $acc = $acc + 1;
        $answer = test_input($_POST["answer"]); 
    }
}

function test_input($data) {
 
 if (isset($data)) 
 {
    // echo "<br><b>Você escolheu: $data</b>";
    
    if($_POST["answer"] == 1) {
       echo "<br>acertou! $acc<br>";
    //    $acc++;
    }
    else {
      echo "errou<br>";
       echo "<p> $acc </p>";
    }
   
  }
  return $data;
}

?>
<div class="question">
<h2>Perguntas</h2>

<body>

<h3> Questão 4: Para as grávidas, quais são os melhores conselhos para evitar a Zika e a possível microcefalia para seu bebê? 
<p>1)	Procure instalar telas em suas janelas e portas, além de roupas compridas que cubram grande parte do corpo para evitar a mordida do mosquito. Procure acompanhamento médico desde o início da gravidez e relate qualquer início de sintoma para que possa ser combatido o mais rápido possível.<br></p>
<p>2)	A qualquer sinal de sintoma, medique-se rapidamente contra ele para evitar que a doença avance. Em seguida, contate rapidamente seu médico.<br></p>
<p>3)	Beba bastante água para permanecer hidratada e diminuir as chances de pegar a doença.<br></p>
<p>4)	Procure ficar ao máximo ao ar livre, já que o mosquito costuma se reproduzir em focos de agua parada dentro das residências.<br></p>




</html>



<div class="btnProx"> 
 <form action="http://45.56.66.69/agora/saude/End.html">
    <input type="submit" name="toEnd" value="Próximo" <?php if ($answer != '1'){ ?> disabled="disabled" <?php   } ?> >
</form>
</div>

<!--</div>-->
<!--<div class="btnProx"> 
 <form action="http://45.56.66.69/agora/index.php">
    <input type="submit" name="toHome" value="Página Inicial">
</form>-->
<!--</div>-->
</body>
</html>



