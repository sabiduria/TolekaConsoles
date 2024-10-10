<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discipline $discipline
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $discipline->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $discipline->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Discipline'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="discipline form content">
            <?= $this->Form->create($discipline) ?>
            <fieldset>
                <legend><?= __('Edit Discipline') ?></legend>
                <?php
                    echo $this->Form->control('typesanction');
                    echo $this->Form->control('matricule');
                    echo $this->Form->control('nomagent');
                    echo $this->Form->control('motif');
                    echo $this->Form->control('datedebut');
                    echo $this->Form->control('datefin');
                    echo $this->Form->control('document');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
