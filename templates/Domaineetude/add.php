<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domaineetude $domaineetude
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Domaineetude'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="domaineetude form content">
            <?= $this->Form->create($domaineetude) ?>
            <fieldset>
                <legend><?= __('Add Domaineetude') ?></legend>
                <?php
                    echo $this->Form->control('domaine');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
