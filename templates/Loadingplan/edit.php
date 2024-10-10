<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loadingplan $loadingplan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $loadingplan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $loadingplan->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Loadingplan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="loadingplan form content">
            <?= $this->Form->create($loadingplan) ?>
            <fieldset>
                <legend><?= __('Edit Loadingplan') ?></legend>
                <?php
                    echo $this->Form->control('idprea');
                    echo $this->Form->control('tonnagetoload');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('exploaddate');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
