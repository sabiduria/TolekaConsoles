<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Formation $formation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Formations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="formations form content">
            <?= $this->Form->create($formation) ?>
            <fieldset>
                <legend><?= __('Add Formation') ?></legend>
                <?php
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('nomformation');
                    echo $this->Form->control('periode');
                    echo $this->Form->control('etablissement');
                    echo $this->Form->control('lieu');
                    echo $this->Form->control('pieceobtenue');
                    echo $this->Form->control('nompiece');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
