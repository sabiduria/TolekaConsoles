<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nationalite $nationalite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nationalite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nationalite->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Nationalite'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="nationalite form content">
            <?= $this->Form->create($nationalite) ?>
            <fieldset>
                <legend><?= __('Edit Nationalite') ?></legend>
                <?php
                    echo $this->Form->control('nationalite');
                    echo $this->Form->control('langue');
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
