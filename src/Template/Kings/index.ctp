<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\King[]|\Cake\Collection\CollectionInterface $kings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New King'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applicants'), ['controller' => 'Applicants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Applicant'), ['controller' => 'Applicants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kings index large-9 medium-8 columns content">
    <h3><?= __('Kings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('applicant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('n_votes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('winner') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kings as $king): ?>
            <tr>
                <td><?= $this->Number->format($king->id) ?></td>
                <td><?= $king->has('applicant') ? $this->Html->link($king->applicant->name, ['controller' => 'Applicants', 'action' => 'view', $king->applicant->id]) : '' ?></td>
                <td><?= h($king->day) ?></td>
                <td><?= $this->Number->format($king->n_votes) ?></td>
                <td><?= $this->Number->format($king->winner) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $king->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $king->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $king->id], ['confirm' => __('Are you sure you want to delete # {0}?', $king->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
