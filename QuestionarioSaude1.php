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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76407240-3', 'auto');
  ga('send', 'pageview');

</script>

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

<h3> Questão 1: Dentre as opções, quais são as melhores dicas para não sofrer com os problemas que o calor do verão traz? <h3>
<p>1)	Beber bastante refrigerante, usar chapéus e bonés para proteger a cabeça, passar bastante protetor solar e se alimentar bastante. <br></p>
<p>2)	Evitar tomar sol entre as 10h e 15h que são o horário de pico do sol, comer bastante alimentos mais leves como frutas, verduras e legumes e beber bastante água.<br></p>
<p>3)	Ficar o máximo possível em locais fechado onde o sol não bate, usar protetor solar enquanto estiver no sol e evitar bebidas alcóolicas.<br></p>
<p>4)	Aproveitar para sair com os amigos e beber bastante cerveja, de preferência a noite para evitar o sol.<br></p>



</html>
</p>


<div class="btnProx"> 
 <form action="http://45.56.66.69/agora/saude/saude2.html">
    <input type="submit" name="toSaude2" value="Próximo" <?php if ($answer != '2'){ ?> disabled="disabled" <?php   } ?> >
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



