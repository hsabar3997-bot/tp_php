<footer><hr>
<p>&copy; <?php echo date("d/m/Y"); ?> - fssm</p>
<?php
$fin = new DateTime("2026-12-31");
$now = new DateTime();
echo "Jours restants semestre: " . $now->diff($fin)->days . " jours";
?>
</footer></body></html>