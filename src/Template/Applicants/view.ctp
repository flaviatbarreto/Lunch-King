<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Applicant $applicant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Applicant'), ['action' => 'edit', $applicant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Applicant'), ['action' => 'delete', $applicant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Applicants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applicant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kings'), ['controller' => 'Kings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New King'), ['controller' => 'Kings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Votes'), ['controller' => 'Votes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vote'), ['controller' => 'Votes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applicants view large-9 medium-8 columns content">
    <h3><?= h($applicant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($applicant->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($applicant->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($applicant->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Kings') ?></h4>
        <?php if (!empty($applicant->kings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Applicant Id') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('N Votes') ?></th>
                <th scope="col"><?= __('Winner') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($applicant->kings as $kings): ?>
            <tr>
                <td><?= h($kings->id) ?></td>
                <td><?= h($kings->applicant_id) ?></td>
                <td><?= h($kings->day) ?></td>
                <td><?= h($kings->n_votes) ?></td>
                <td><?= h($kings->winner) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Kings', 'action' => 'view', $kings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Kings', 'action' => 'edit', $kings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Kings', 'action' => 'delete', $kings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Votes') ?></h4>
        <?php if (!empty($applicant->votes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('Applicant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($applicant->votes as $votes): ?>
            <tr>
                <td><?= h($votes->id) ?></td>
                <td><?= h($votes->day) ?></td>
                <td><?= h($votes->applicant_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Votes', 'action' => 'view', $votes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Votes', 'action' => 'edit', $votes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Votes', 'action' => 'delete', $votes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $votes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
