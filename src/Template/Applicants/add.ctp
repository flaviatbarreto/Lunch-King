<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Applicant $applicant
 */
?>
<?= $this->Form->create($applicant, [
    'class' => 'col-md-6',
    'enctype' => 'multipart/form-data'
]) ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" class="form-control" name="photo" id="photo" required>
    </div>
<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
<?= $this->Form->end() ?>
