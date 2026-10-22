<?php
$estudiantes = ['Fernández', 'Martínez', 'García', 'Sánchez'];

$buscado = 'García'; // Jiménez

$contador = 0;

while(
        isset($estudiantes[$contador]) &&
        ! $encontrado = ($estudiantes[$contador++] == $buscado)
    );
?>
<p>El apellido <?= $buscado ?> <?= $encontrado ? 'Sí' : 'No' ?> está en el array</p>

