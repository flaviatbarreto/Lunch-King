<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\King $king
 */
?>
<h1 class="h3">The Lunch King <?= $date ?></h1>

<h2 class="h4">
    <?php
        if(isset($king->applicant))
            echo $king->applicant->name;
        else
            echo "There is no King today";
    ?>
</h2>
