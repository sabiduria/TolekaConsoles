<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametresapp $parametresapp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parametresapp->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parametresapp->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Parametresapp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="parametresapp form content">
            <?= $this->Form->create($parametresapp) ?>
            <fieldset>
                <legend><?= __('Edit Parametresapp') ?></legend>
                <?php
                    echo $this->Form->control('nomapp');
                    echo $this->Form->control('slogan');
                    echo $this->Form->control('description');
                    echo $this->Form->control('logo');
                    echo $this->Form->control('emailapp');
                    echo $this->Form->control('telapp');
                    echo $this->Form->control('nomresp');
                    echo $this->Form->control('telresp');
                    echo $this->Form->control('emailresp');
                    echo $this->Form->control('domaine');
                    echo $this->Form->control('code');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('datemiseajour');
                    echo $this->Form->control('rccm');
                    echo $this->Form->control('idnat');
                    echo $this->Form->control('numimpot');
                    echo $this->Form->control('numtva');
                    echo $this->Form->control('nomcompagnie');
                    echo $this->Form->control('declaration');
                    echo $this->Form->control('prixdocuments');
                    echo $this->Form->control('banque');
                    echo $this->Form->control('numcomptebanqueusd');
                    echo $this->Form->control('numcomptebanquecdf');
                    echo $this->Form->control('numcompte_airtelmonney');
                    echo $this->Form->control('numcompte_mpesa');
                    echo $this->Form->control('numcompte_orangemonney');
                    echo $this->Form->control('version');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
