<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detailslot $detailslot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Detailslot'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detailslot form content">
            <?= $this->Form->create($detailslot) ?>
            <fieldset>
                <legend><?= __('Add Detailslot') ?></legend>
                <?php
                    echo $this->Form->control('numlot');
                    echo $this->Form->control('idbag');
                    echo $this->Form->control('bagid');
                    echo $this->Form->control('h20');
                    echo $this->Form->control('co');
                    echo $this->Form->control('u');
                    echo $this->Form->control('mg');
                    echo $this->Form->control('mn');
                    echo $this->Form->control('ni');
                    echo $this->Form->control('fe');
                    echo $this->Form->control('ca');
                    echo $this->Form->control('si');
                    echo $this->Form->control('al');
                    echo $this->Form->control('cu');
                    echo $this->Form->control('cocont');
                    echo $this->Form->control('spec');
                    echo $this->Form->control('user');
                    echo $this->Form->control('datecrea');
                    echo $this->Form->control('dateprod');
                    echo $this->Form->control('poids');
                    echo $this->Form->control('composite');
                    echo $this->Form->control('zn');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
