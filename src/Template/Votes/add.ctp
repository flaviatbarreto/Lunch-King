<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote $vote
 */
?>

<h1 class="h3">Who is the king today?</h1>

<?= $this->Form->create($vote) ?>
<?php foreach($applicants as $applicant): ?>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="applicant_id" id="applicant<?=$applicant->id?>" value="<?=$applicant->id?>">
            <label class="form-check-label" for="applicant<?=$applicant->id?>">
                <image src="/img/<?=$applicant->photo?>" width="200px">
                <span class="row d-flex justify-content-center"><b><?=$applicant->name?></b></span>
            </label>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->Form->button(__('Vote'), ['class'=>'btn btn-success']) ?>
<?= $this->Form->end() ?>
