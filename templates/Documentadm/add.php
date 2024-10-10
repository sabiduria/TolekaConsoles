<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentadm $documentadm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Documentadm'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="documentadm form content">
            <?= $this->Form->create($documentadm) ?>
            <fieldset>
                <legend><?= __('Add Documentadm') ?></legend>
                <?php
                    echo $this->Form->control('type');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
