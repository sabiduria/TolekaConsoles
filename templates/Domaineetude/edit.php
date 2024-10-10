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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $domaineetude->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $domaineetude->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Domaineetude'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="domaineetude form content">
            <?= $this->Form->create($domaineetude) ?>
            <fieldset>
                <legend><?= __('Edit Domaineetude') ?></legend>
                <?php
                    echo $this->Form->control('domaine');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
