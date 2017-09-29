<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<div class="container" style="text-align: center;width: 400px; position: relative;">
<div class="<?= h($params['class']) ?>" onclick="this.classList.add('hidden')">
    <?= h($message) ?>
</div>
</div>
