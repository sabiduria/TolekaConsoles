<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imexlotupdate $imexlotupdate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imexlotupdate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imexlotupdate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Imexlotupdates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="imexlotupdates form content">
            <?= $this->Form->create($imexlotupdate) ?>
            <fieldset>
                <legend><?= __('Edit Imexlotupdate') ?></legend>
                <?php
                    echo $this->Form->control('numlot');
                    echo $this->Form->control('oldimexlot');
                    echo $this->Form->control('newimexlot');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
