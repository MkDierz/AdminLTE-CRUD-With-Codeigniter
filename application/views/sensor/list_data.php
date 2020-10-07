<?php
foreach ($datasensor as $sensor) {
?>
    <tr>
        <td><?= date("H:i:s", $sensor->TIME); ?></td>
        <td><?= $sensor->S1; ?></td>
        <td><?= $sensor->S2; ?></td>
        <td><?= $sensor->S3; ?></td>
        <td><?= $sensor->S4; ?></td>
    </tr>
<?php } ?>