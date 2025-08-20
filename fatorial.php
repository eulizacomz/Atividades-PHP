<?

$numero =8;


function calcularNumero ($numero, $fatorial) {
	
	$fatorial= 1;
	for ($i =2; $i <= $numero; $i++)
	$fatorial *= $i;
};
echo "O fatorial de $numero é $fatorial";
return $fatorial;

calcularNumero();
<?