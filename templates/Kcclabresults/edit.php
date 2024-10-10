<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kcclabresult $kcclabresult
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kcclabresult->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kcclabresult->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Kcclabresults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="kcclabresults form content">
            <?= $this->Form->create($kcclabresult) ?>
            <fieldset>
                <legend><?= __('Edit Kcclabresult') ?></legend>
                <?php
                    echo $this->Form->control('composite');
                    echo $this->Form->control('co');
                    echo $this->Form->control('al');
                    echo $this->Form->control('ca');
                    echo $this->Form->control('cu');
                    echo $this->Form->control('fe');
                    echo $this->Form->control('mg');
                    echo $this->Form->control('mn');
                    echo $this->Form->control('ni');
                    echo $this->Form->control('zn');
                    echo $this->Form->control('u');
                    echo $this->Form->control('h2o');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
