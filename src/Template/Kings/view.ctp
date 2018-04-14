<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\King $king
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit King'), ['action' => 'edit', $king->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete King'), ['action' => 'delete', $king->id], ['confirm' => __('Are you sure you want to delete # {0}?', $king->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New King'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kings view large-9 medium-8 columns content">
    <h3><?= h($king->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Applicant') ?></th>
            <td><?= $king->has('applicant') ? $this->Html->link($king->applicant->name, ['controller' => 'Applicants', 'action' => 'view', $king->applicant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($king->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N Votes') ?></th>
            <td><?= $this->Number->format($king->n_votes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Winner') ?></th>
            <td><?= $this->Number->format($king->winner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day') ?></th>
            <td><?= h($king->day) ?></td>
        </tr>
    </table>
</div>
