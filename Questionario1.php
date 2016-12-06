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
<form class="answer" action="Questionario1.php" method="post">
  <input type="radio" name="answer" value="1"> Opção 1  <br>
  <input type="radio" name="answer" value="2"> Opção 2  <br>
  <input type="radio" name="answer" value="3"> Opção 3  <br><br>
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
    
    if($_POST["answer"] == 2) {
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

<h3> 1ª questão - Escolha a opção que mostra em ordem, os passos para se alcançar um objetivo (financeiro ou não) </h3>
</p>
<p> 1)	Estabelecer etapas intermediárias para o seu objetivo -> Ter plena noção de seu objetivo final -> Ter sua meta final estabelecida de forma clara e objetiva -> Internalizar sua visão de um futuro com seus objetivos cumpridos -> Comemorar  o cumprimeneto de suas metas intermediárias para combater a desmotivação sempre que possível.
</p> 
<p> 2)	Ter plena noção de seu objetivo final -> Ter sua meta final estabelecida de forma clara e objetiva -> Internalizar a visão de um futuro com seus objetivos cumpridos -> Estabelecer etapas intermediárias para o seu objetivo -> Comemorar o cumprimento de suas metas intermediárias para combater a desmotivação sempre que possível. </p>
<p> 3)  Comemorar o cumprimento de suas metas intermediárias para combater a desmotivação sempre que possível ->Ter plena noção de seu objetivo final -> Internalizar a visão de um futuro com seus objetivos cumpridos ->Estabelecer etapas intermediárias para o seu objetivo ->Ter sua meta final estabelecida de forma clara e objetiva.</p>


</html>
</p>


<div class="btnProx"> 
 <form action="http://45.56.66.69/agora/financas/financas2.html">
    <input type="submit" name="toFinancas2" value="Próximo" <?php if ($answer != '2'){ ?> disabled="disabled" <?php   } ?> >
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



