<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\King $king
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $king->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $king->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kings form large-9 medium-8 columns content">
    <?= $this->Form->create($king) ?>
    <fieldset>
        <legend><?= __('Edit King') ?></legend>
        <?php
            echo $this->Form->control('applicant_id', ['options' => $applicants]);
            echo $this->Form->control('day');
            echo $this->Form->control('n_votes');
            echo $this->Form->control('winner');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
