<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pay $pay
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pays form content">
            <?= $this->Form->create($pay) ?>
            <fieldset>
                <legend><?= __('Add Pay') ?></legend>
                <?php
                    echo $this->Form->control('nompays');
                    echo $this->Form->control('fraistransport');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
