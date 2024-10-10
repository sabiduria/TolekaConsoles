<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cubundle $cubundle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cubundle'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cubundle form content">
            <?= $this->Form->create($cubundle) ?>
            <fieldset>
                <legend><?= __('Add Cubundle') ?></legend>
                <?php
                    echo $this->Form->control('dateprod');
                    echo $this->Form->control('unit');
                    echo $this->Form->control('lotnumber');
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('bundlecode');
                    echo $this->Form->control('composite');
                    echo $this->Form->control('grossweight');
                    echo $this->Form->control('netweight');
                    echo $this->Form->control('visualgrade');
                    echo $this->Form->control('chemicalgrade');
                    echo $this->Form->control('finalgrade');
                    echo $this->Form->control('location');
                    echo $this->Form->control('charge');
                    echo $this->Form->control('dateloaded');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('seal1');
                    echo $this->Form->control('seal2');
                    echo $this->Form->control('dateadded');
                    echo $this->Form->control('datechecked');
                    echo $this->Form->control('synced');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
