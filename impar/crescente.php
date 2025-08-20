<?

$a = 7;
$b = 2;

function Crescente($a, $b) {
  if ($a < $b) {
    echo $a . " " . $b;
  } else {
    echo $b . " " . $a;
  }
}

Crescente($a, $b); 
?>