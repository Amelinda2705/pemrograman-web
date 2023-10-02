<?php 

$celcius = 30;

$hasil_farenheit = (9/5) * $celcius + 32;
$hasil_kelvin = $celcius + 273.15;
$hasil_reamur = (4/5) * $celcius;
$hasil_rankine = ($celcius + 273.15) * 9/5;

echo "Rumus Celcius ke Farenheit<br>";
echo "<sup>o</sup>F = (9/5) x <sup>o</sup>C + 32<br>";
echo "<sup>o</sup>F = (9/5) x $celcius + 32 = $hasil_farenheit<br><br>";

echo "Rumus Celcius ke Reamur<br>";
echo "<sup>o</sup>R = (4/5) <sup>o</sup>C <br>";
echo "<sup>o</sup>R = (4/5) x $celcius = $hasil_reamur<br><br>";

echo "Rumus Celcius ke Rankine<br>";
echo "<sup>o</sup>Ra = (<sup>o</sup>C + 273.15) x 9/5 <br>";
echo "<sup>o</sup>Ra = ($celcius+ 273.15) x 9/5 = $hasil_rankine<br><br>";

echo "Rumus Celcius ke Kelvin<br>";
echo "K = <sup>o</sup>C + 273.15<br>";
echo "K = $celcius + 273.15 = $hasil_kelvin<br><br>";

