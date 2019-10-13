<?php
class imc{
  var $nome;
  var $peso;
  var $altura;

  function Calcual_imc($peso,$altura){
     $imcs= ($peso/($altura*$altura));
     if($imcs<16){
       echo "Seu estado fisico é sobpeso severo<br>";
       return $imcs;
     }elseif($imcs >=16 and $imcs <=19){
       echo"Seu estado fisico é sobpeso <br>";
       return $imcs;
     }elseif($imcs>=20 and $imcs <=24){
       echo"Seu estado fisico é normal <br>";
       return $imcs;
     }elseif($imcs>=25 and $imcs <=29){
       echo"Seu estado fisico é sobrepeso <br>";
       return $imcs;
     }elseif($imcs>=30 and $imcs <=39){
       echo"Seu estado fisico é Obeso<br>";
       return $imcs;
     }else{
       echo"Seu estado fisico é Obeso Morbido <br>";
       return $imcs;
     }
  }
  
}