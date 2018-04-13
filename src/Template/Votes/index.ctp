<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote[]|\Cake\Collection\CollectionInterface $votes
 */
?>
<div class="votes index large-9 medium-8 columns content">
    <h3><?= __('Votes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('applicant_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($votes as $vote): ?>
            <tr>
                <td><?= $this->Number->format($vote->id) ?></td>
                <td><?= h($vote->day) ?></td>
                <td><?= $vote->has('applicant') ? $this->Html->link($vote->applicant->name, ['controller' => 'Applicants', 'action' => 'view', $vote->applicant->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vote->id)]) ?>
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
