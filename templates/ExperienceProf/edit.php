<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExperienceProf $experienceProf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $experienceProf->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $experienceProf->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Experience Prof'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="experienceProf form content">
            <?= $this->Form->create($experienceProf) ?>
            <fieldset>
                <legend><?= __('Edit Experience Prof') ?></legend>
                <?php
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('periode');
                    echo $this->Form->control('entreprise');
                    echo $this->Form->control('fonction');
                    echo $this->Form->control('ville');
                    echo $this->Form->control('raison');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
