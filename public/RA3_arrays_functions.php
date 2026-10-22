<?php
  $curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
  ];

  $copia = $curriculos;
  $copia[] = ['alumno' => 'Pablo Ruiz', 'ciclo' => 'DAW', 'video' => ''];

?>
<pre>
<?php
    print_r($curriculos);
    print_r($copia);
?>
</pre>