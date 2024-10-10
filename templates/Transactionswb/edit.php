<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactionswb $transactionswb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transactionswb->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transactionswb->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transactionswb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transactionswb form content">
            <?= $this->Form->create($transactionswb) ?>
            <fieldset>
                <legend><?= __('Edit Transactionswb') ?></legend>
                <?php
                    echo $this->Form->control('idtrip');
                    echo $this->Form->control('wbop');
                    echo $this->Form->control('date');
                    echo $this->Form->control('typetrans');
                    echo $this->Form->control('tare');
                    echo $this->Form->control('poidsbrut');
                    echo $this->Form->control('poidsnet');
                    echo $this->Form->control('nbitems');
                    echo $this->Form->control('decision');
                    echo $this->Form->control('wbticket');
                    echo $this->Form->control('nbpass');
                    echo $this->Form->control('variance');
                    echo $this->Form->control('purvar');
                    echo $this->Form->control('lienwbticket');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
