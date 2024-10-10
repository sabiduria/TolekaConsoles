<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudesfaite $etudesfaite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Etudesfaites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="etudesfaites form content">
            <?= $this->Form->create($etudesfaite) ?>
            <fieldset>
                <legend><?= __('Add Etudesfaite') ?></legend>
                <?php
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('periode');
                    echo $this->Form->control('ecole');
                    echo $this->Form->control('classes');
                    echo $this->Form->control('ville');
                    echo $this->Form->control('pieceobtenue');
                    echo $this->Form->control('dateenregistrement');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
