<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote $vote
 */
?>

<h1 class="h3">Who is the king today?</h1>

<?= $this->Form->create($vote) ?>
    <?php foreach($applicants as $id => $applicant): ?>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="applicant_id" id="applicant<?=$id?>" value="<?=$id?>">
                    <label class="form-check-label" for="applicant<?=$id?>">
                        <?=$applicant?>
                    </label>
                </div>
            </div>
    <?php endforeach; ?>

<?= $this->Form->button(__('Vote'), ['class'=>'btn btn-success']) ?>
<?= $this->Form->end() ?>
