<? php

/*
 1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros
almacenados en 2 variables diferentes. Conserve el siguiente formato de impresión: 
*/

//programa que sirve de calculadora aritmetica

$numero1=5;
$numero2=10;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;
echo("la suma de: ".$numero1."+".$numero2." = ".$suma);
echo("<br>");
echo("la resta de: ".$numero1."-".$numero2." = ".$resta);
echo("<br>");
echo("la multiplicacion de: ".$numero1."*".$numero2." = ".$multiplicacion);
echo("<br>");
echo("la division de: ".$numero1."/".$numero2." = ".$division);


//*******************************************************************************************************

/*
2. El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de
masa corporal, basado en la formula 𝐈𝐌𝐂 = 𝑷𝒆𝒔𝒐/(𝑨𝒍𝒕𝒖𝒓𝒂*𝑨𝒍𝒕𝒖𝒓)
IMC <= 18,4 (Insuficiencia de peso)
• 18,5<=IMC<=24,9 (Peso normal)
• 25<=IMC<=29,9 (Sobrepeso)
• 30<=IMC<=34,9 (Obesidad 1)
• 35<=IMC<=39,9 (Obesidad 2)
• IMC>=40 (Obesidad 3)
*/

//Programa para calcular masa corporal

$peso=85;
$altura=1.78;
$imc=$peso/($altura*$altura);
echo("********************************");
echo("<br>");
echo("Indice de masa corporal(IMC)");
echo("<br>");
echo("********************************");
echo("<br>");
echo("<br>");
echo("Su indice de masa corporal es de:".$imc);
echo("<br>");
echo("<br>");
if($imc>=40){
    echo("Usted está en obesidad 3");  
}
else if($imc<=39.9 && $imc>=35){
    echo("Usted está en obesidad 2"); 
}
else if ($imc<=34.9 && $imc>=30){
    echo("Usted está en obesidad 1");
}
else if ($imc<=29.9 && $imc>=25){
    echo("Usted está en sobrepeso");
}
else if($imc<=24.9 && $imc>=18.5){
    echo("Usted posee su peso normal");
}
else if($imc<=18.4){
    echo("Usted está con insuficiencia de peso");
}
else{
    echo("su indice de masa corporal no existe o no se encuentra registrado en el programa");
  }
  echo("<br>");
  echo("<br>");
  echo("********************************");
  echo("<br>");
  echo("Gracias por utilizar este programa");
  echo("<br>");
  echo("********************************");
  echo("<br>");
  
// Codigo para organizar 
// Revisar este código que tiene varios errores y ajustar hasta que se obtenga un resultado
//Ejercicio 3


$cantidadZapatos=5;
$costoneto=150000;
$totalCompra=$cantidadZapatos*$costoneto;


if($cantidadZapatos==3) {
  $valordescuento=$totalCompra*0.10;
    
} else if($cantidadZapatos>3 && $cantidadZapatos<=5) {
  $valordescuento=$totalCompra*0.20;
    
} else if($cantidadZapatos>5) {
  $valordescuento=$totalCompra*0.40;
}
$valorPagar=($cantidadZapatos*$costoneto) - $valordescuento;
echo("Cantidad Vendida:".$cantidadZapatos."<br>Coste Neto: ".$totalCompra."<br>Valor del Descuento: ".$valordescuento."<br>Valor de un Pagar es: ".$valorPagar);


/*
4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, 
se sabe que si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas 
entonces las horas extras se le pagarán a $25000 por hora. Ejecute su código para calcular el salario
con 36 horas trabajadas.
*/

$horastrabaja=36;

if($horastrabaja>40){
$salbasi=25000*$horastrabaja;
}
else{
$salbasi=20000*$horastrabaja;    
}
echo("El sueldo que usted va a ganar está semanada es de ".$salbasi." Con ".$horastrabaja." horas trabajadas" );

/*
5. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de 
dicha consulta en un arreglo denominado salpicón, el cual presenta la siguiente configuración:
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[acido3]=>”Lulo”
*/

$dulces=array("dulce1"=>"Banano","dulce2"=>"Manzana","dulce3"=>"Durazno","acido1"=>"Piña","acido2"=>"Naranja","acido3"=>"Lulo");
print_r($dulces);



?>