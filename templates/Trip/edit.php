<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trip $trip
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trip->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trip->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Trip'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="trip form content">
            <?= $this->Form->create($trip) ?>
            <fieldset>
                <legend><?= __('Edit Trip') ?></legend>
                <?php
                    echo $this->Form->control('prealerte');
                    echo $this->Form->control('produit');
                    echo $this->Form->control('exploaddate');
                    echo $this->Form->control('tonnagetoload');
                    echo $this->Form->control('tonnageload');
                    echo $this->Form->control('loaddate');
                    echo $this->Form->control('templot');
                    echo $this->Form->control('imexlot');
                    echo $this->Form->control('items');
                    echo $this->Form->control('loadassist');
                    echo $this->Form->control('ckopsop');
                    echo $this->Form->control('forkliftop1');
                    echo $this->Form->control('dateckops');
                    echo $this->Form->control('datewbein');
                    echo $this->Form->control('datewbout');
                    echo $this->Form->control('wbopin');
                    echo $this->Form->control('wbopout');
                    echo $this->Form->control('netweight');
                    echo $this->Form->control('grossweight');
                    echo $this->Form->control('wbticket');
                    echo $this->Form->control('tare');
                    echo $this->Form->control('nbitemwb');
                    echo $this->Form->control('commentwb');
                    echo $this->Form->control('ckadate');
                    echo $this->Form->control('ckaop');
                    echo $this->Form->control('nbitemcka');
                    echo $this->Form->control('commentcka');
                    echo $this->Form->control('expbpdate');
                    echo $this->Form->control('bpdate');
                    echo $this->Form->control('bpop');
                    echo $this->Form->control('fxodate');
                    echo $this->Form->control('fxoop');
                    echo $this->Form->control('exitdrcdate');
                    echo $this->Form->control('exitdrcop');
                    echo $this->Form->control('exppkldate');
                    echo $this->Form->control('pkldate');
                    echo $this->Form->control('pklop');
                    echo $this->Form->control('expdocdate');
                    echo $this->Form->control('docdate');
                    echo $this->Form->control('docop');
                    echo $this->Form->control('expdispdate');
                    echo $this->Form->control('dispdate');
                    echo $this->Form->control('dispop');
                    echo $this->Form->control('statutload');
                    echo $this->Form->control('statutckops');
                    echo $this->Form->control('statutcka');
                    echo $this->Form->control('statutbp');
                    echo $this->Form->control('statutfxo');
                    echo $this->Form->control('statutpkl');
                    echo $this->Form->control('statutexitdrc');
                    echo $this->Form->control('statutdoc');
                    echo $this->Form->control('statutdisp');
                    echo $this->Form->control('statutwb');
                    echo $this->Form->control('datetrip');
                    echo $this->Form->control('iduser');
                    echo $this->Form->control('statuttrip');
                    echo $this->Form->control('moisgestion');
                    echo $this->Form->control('invoicedate');
                    echo $this->Form->control('invoiceop');
                    echo $this->Form->control('statutinvoice');
                    echo $this->Form->control('commentdisp');
                    echo $this->Form->control('arrdate');
                    echo $this->Form->control('typetransp');
                    echo $this->Form->control('samplingdate');
                    echo $this->Form->control('samplingop');
                    echo $this->Form->control('stickercheckdate');
                    echo $this->Form->control('stickercheckop');
                    echo $this->Form->control('loadcheckdate');
                    echo $this->Form->control('loadcheckop');
                    echo $this->Form->control('riskdate');
                    echo $this->Form->control('statutrisk');
                    echo $this->Form->control('riskop');
                    echo $this->Form->control('commentrisk');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
