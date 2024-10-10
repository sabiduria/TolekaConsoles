<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Niveauetude $niveauetude
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $niveauetude->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $niveauetude->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Niveauetude'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="niveauetude form content">
            <?= $this->Form->create($niveauetude) ?>
            <fieldset>
                <legend><?= __('Edit Niveauetude') ?></legend>
                <?php
                    echo $this->Form->control('niveau');
                    echo $this->Form->control('description');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
