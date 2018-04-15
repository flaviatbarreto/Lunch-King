<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\King $king
 */
?>
<h1 class="h3">The Lunch King <?= $date ?></h1>

<div class="col-md-6">
    <?php if(isset($king->applicant)): ?>
        <image src="/img/<?=$king->applicant->photo?>" width="400px">
        <h2 class="h4 row d-flex justify-content-center"><b><?=$king->applicant->name?></b></h2>
    <?php else: ?>
        <h2 class="h4 row d-flex justify-content-center">There is no King today</h2>
    <?php endif; ?>
</div>
