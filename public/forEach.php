<?php
$curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
  ];
?>
<ol>
<?php foreach ($curriculos as ['alumno' => $alumno, 'ciclo' => $ciclo]) : ?>
  <li class="curriculo" value="<?= $clave ?>">
    <dl>
      <dt><?= $campo ?></dt>
        <dd><?= $valor ?></dd>
    <?php endforeach; ?>
    </dl>
  </li>
<?php endforeach; ?>
</ol>

