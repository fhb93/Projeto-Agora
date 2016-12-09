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
<form class="answer" action="Questionario2.php" method="post">
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
    
    if($_POST["answer"] == 3) {
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76407240-3', 'auto');
  ga('send', 'pageview');

</script>
<h3> 2ª questão - Escolha a opção correta quanto à orçamento</h3>
<p> 1)	Para a elaboração de um orçamento pessoal (ou familiar) deve-se seguir os seguintes passos, nessa ordem:
Planejamento -> Avaliação -> Registro -> Agrupamento
</p>
<p> 2)	É impossível recuperar um status positivo de seu orçamento quando ele inicia Deficitário, ou seja, é impossível passar a dever menor do que se recebe.
</p> 
<p> 3)	O orçamento pode, dentre muitas coisas, ajudar a entender seus hábitos de consumo para que se torne mais fácil administrar seus gastos.
</p>
<p> 4)	Para se elaborar um orçamento pessoal e familiar, usam-se métodos totalmente diferentes.
</p>


</html>
<html>
</p>
<!--</div>-->
<div class="btnProx"> 
 <form action="http://45.56.66.69/agora/financas/financas3.html">
    <input type="submit" name="toFinancas2" value="Próximo" <?php if ($answer != '3'){ ?> disabled="disabled" <?php   } ?> >
</form>
</div>
<!--<div class="btnProx"> 
 <form action="http://45.56.66.69/agora/index.php">
    <input type="submit" name="toHome" value="Página Inicial">
</form>
</div>-->
</body>
</html>



