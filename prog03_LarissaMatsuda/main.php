<?php
$contador = 1;

while ($contador <= 100) {
  if ($contador % 2 == 0) {
    echo $contador;

    if ($contador < 100) {
      echo ", ";
    }
  }

  $contador++;
}
?>
