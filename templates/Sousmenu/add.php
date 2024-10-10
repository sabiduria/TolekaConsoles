<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sousmenu $sousmenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sousmenu'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sousmenu form content">
            <?= $this->Form->create($sousmenu) ?>
            <fieldset>
                <legend><?= __('Add Sousmenu') ?></legend>
                <?php
                    echo $this->Form->control('idmenu');
                    echo $this->Form->control('url');
                    echo $this->Form->control('page');
                    echo $this->Form->control('nomsousmenu');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
