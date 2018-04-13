<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote $vote
 */
?>

<?= $this->Form->create($vote) ?>
<fieldset>
    <legend><?= __('Add Vote') ?></legend>
    <?php
        echo $this->Form->control('day');
        echo $this->Form->control('applicant_id', ['options' => $applicants]);
    ?>
</fieldset>
<?= $this->Form->button(__('Vote')) ?>
<?= $this->Form->end() ?>
