<?php 
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
?>
<table border="solid 1px">
<?php for($x = 0; $x < $datos[0]; $x++): ?>
    <tr>
<?php for($j = 0; $j < $datos[1]; $j++): ?>
        <td></td>
<?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>