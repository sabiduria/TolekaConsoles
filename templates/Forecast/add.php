<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Forecast $forecast
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Forecast'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="forecast form content">
            <?= $this->Form->create($forecast) ?>
            <fieldset>
                <legend><?= __('Add Forecast') ?></legend>
                <?php
                    echo $this->Form->control('moisgestion');
                    echo $this->Form->control('scancu');
                    echo $this->Form->control('scancoh');
                    echo $this->Form->control('charcu');
                    echo $this->Form->control('charcoh');
                    echo $this->Form->control('doccu');
                    echo $this->Form->control('doccoh');
                    echo $this->Form->control('dispcu');
                    echo $this->Form->control('dispcoh');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
