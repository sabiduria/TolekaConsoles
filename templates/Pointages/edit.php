<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pointage $pointage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pointage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pointage->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pointages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pointages form content">
            <?= $this->Form->create($pointage) ?>
            <fieldset>
                <legend><?= __('Edit Pointage') ?></legend>
                <?php
                    echo $this->Form->control('codepointage');
                    echo $this->Form->control('description');
                    echo $this->Form->control('type');
                    echo $this->Form->control('coefficient');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                    echo $this->Form->control('descriptionen');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
