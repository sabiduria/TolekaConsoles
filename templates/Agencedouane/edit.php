<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agencedouane $agencedouane
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agencedouane->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agencedouane->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Agencedouane'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agencedouane form content">
            <?= $this->Form->create($agencedouane) ?>
            <fieldset>
                <legend><?= __('Edit Agencedouane') ?></legend>
                <?php
                    echo $this->Form->control('nomagence');
                    echo $this->Form->control('responsable');
                    echo $this->Form->control('telresp');
                    echo $this->Form->control('emailresp');
                    echo $this->Form->control('agentsite');
                    echo $this->Form->control('telagent');
                    echo $this->Form->control('emailagent');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('pays');
                    echo $this->Form->control('statut');
                    echo $this->Form->control('date');
                    echo $this->Form->control('iduser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
