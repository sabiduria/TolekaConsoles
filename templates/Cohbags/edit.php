<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cohbag $cohbag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cohbag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cohbag->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cohbags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cohbags form content">
            <?= $this->Form->create($cohbag) ?>
            <fieldset>
                <legend><?= __('Edit Cohbag') ?></legend>
                <?php
                    echo $this->Form->control('bagid');
                    echo $this->Form->control('composite');
                    echo $this->Form->control('dateprod');
                    echo $this->Form->control('poids');
                    echo $this->Form->control('localisation');
                    echo $this->Form->control('h2o');
                    echo $this->Form->control('co');
                    echo $this->Form->control('co_cont');
                    echo $this->Form->control('uranium');
                    echo $this->Form->control('mg');
                    echo $this->Form->control('fe');
                    echo $this->Form->control('zn');
                    echo $this->Form->control('ca');
                    echo $this->Form->control('mn');
                    echo $this->Form->control('ni');
                    echo $this->Form->control('al');
                    echo $this->Form->control('cu');
                    echo $this->Form->control('charge');
                    echo $this->Form->control('spec');
                    echo $this->Form->control('lotnumber');
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('dateload');
                    echo $this->Form->control('dateact');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('vpoids');
                    echo $this->Form->control('vh2o');
                    echo $this->Form->control('vco');
                    echo $this->Form->control('produith2o');
                    echo $this->Form->control('produitco');
                    echo $this->Form->control('seal');
                    echo $this->Form->control('dateadded');
                    echo $this->Form->control('datechecked');
                    echo $this->Form->control('synced');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
