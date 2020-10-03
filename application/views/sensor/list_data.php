<?php
foreach ($datasensor as $sensor) {
?>
    <tr>
        <td><?= date("d-M-Y H:i:s", $sensor->time); ?></td>
        <td><?= $sensor->sensor_serial; ?></td>
        <td><?= $sensor->sensor_value; ?></td>
    </tr>
<?php } ?>