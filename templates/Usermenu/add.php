<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usermenu $usermenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Usermenu'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usermenu form content">
            <?= $this->Form->create($usermenu) ?>
            <fieldset>
                <legend><?= __('Add Usermenu') ?></legend>
                <?php
                    echo $this->Form->control('idmenu');
                    echo $this->Form->control('idrole');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
