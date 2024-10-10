<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotdetail $lotdetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lotdetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lotdetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lotdetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lotdetails form content">
            <?= $this->Form->create($lotdetail) ?>
            <fieldset>
                <legend><?= __('Edit Lotdetail') ?></legend>
                <?php
                    echo $this->Form->control('lotid');
                    echo $this->Form->control('bagid');
                    echo $this->Form->control('bagnumber');
                    echo $this->Form->control('poids');
                    echo $this->Form->control('h2o');
                    echo $this->Form->control('co');
                    echo $this->Form->control('fe');
                    echo $this->Form->control('ca');
                    echo $this->Form->control('mg');
                    echo $this->Form->control('ni');
                    echo $this->Form->control('mn');
                    echo $this->Form->control('si');
                    echo $this->Form->control('al');
                    echo $this->Form->control('cu');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
