<?php
function drawMonster(int $type, int $size):void {
?>
 <img src="monstrum<?= $type; ?>.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 
<?php }