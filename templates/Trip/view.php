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
            <?= $this->Html->link(__('Edit Trip'), ['action' => 'edit', $trip->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Trip'), ['action' => 'delete', $trip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trip->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Trip'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Trip'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="trip view content">
            <h3><?= h($trip->produit) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produit') ?></th>
                    <td><?= h($trip->produit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnagetoload') ?></th>
                    <td><?= h($trip->tonnagetoload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Templot') ?></th>
                    <td><?= h($trip->templot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imexlot') ?></th>
                    <td><?= h($trip->imexlot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadassist') ?></th>
                    <td><?= h($trip->loadassist) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ckopsop') ?></th>
                    <td><?= h($trip->ckopsop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Forkliftop1') ?></th>
                    <td><?= h($trip->forkliftop1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wbopin') ?></th>
                    <td><?= h($trip->wbopin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wbopout') ?></th>
                    <td><?= h($trip->wbopout) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wbticket') ?></th>
                    <td><?= h($trip->wbticket) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentwb') ?></th>
                    <td><?= h($trip->commentwb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ckaop') ?></th>
                    <td><?= h($trip->ckaop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentcka') ?></th>
                    <td><?= h($trip->commentcka) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bpop') ?></th>
                    <td><?= h($trip->bpop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fxoop') ?></th>
                    <td><?= h($trip->fxoop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exitdrcop') ?></th>
                    <td><?= h($trip->exitdrcop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pklop') ?></th>
                    <td><?= h($trip->pklop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Docop') ?></th>
                    <td><?= h($trip->docop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dispop') ?></th>
                    <td><?= h($trip->dispop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutload') ?></th>
                    <td><?= h($trip->statutload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutckops') ?></th>
                    <td><?= h($trip->statutckops) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutcka') ?></th>
                    <td><?= h($trip->statutcka) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutbp') ?></th>
                    <td><?= h($trip->statutbp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutfxo') ?></th>
                    <td><?= h($trip->statutfxo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutpkl') ?></th>
                    <td><?= h($trip->statutpkl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutexitdrc') ?></th>
                    <td><?= h($trip->statutexitdrc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutdoc') ?></th>
                    <td><?= h($trip->statutdoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutdisp') ?></th>
                    <td><?= h($trip->statutdisp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutwb') ?></th>
                    <td><?= h($trip->statutwb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statuttrip') ?></th>
                    <td><?= h($trip->statuttrip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Moisgestion') ?></th>
                    <td><?= h($trip->moisgestion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Invoiceop') ?></th>
                    <td><?= h($trip->invoiceop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutinvoice') ?></th>
                    <td><?= h($trip->statutinvoice) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentdisp') ?></th>
                    <td><?= h($trip->commentdisp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typetransp') ?></th>
                    <td><?= h($trip->typetransp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Samplingop') ?></th>
                    <td><?= h($trip->samplingop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stickercheckop') ?></th>
                    <td><?= h($trip->stickercheckop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadcheckop') ?></th>
                    <td><?= h($trip->loadcheckop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statutrisk') ?></th>
                    <td><?= h($trip->statutrisk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentrisk') ?></th>
                    <td><?= h($trip->commentrisk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trip->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prealerte') ?></th>
                    <td><?= $this->Number->format($trip->prealerte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tonnageload') ?></th>
                    <td><?= $this->Number->format($trip->tonnageload) ?></td>
                </tr>
                <tr>
                    <th><?= __('Items') ?></th>
                    <td><?= $this->Number->format($trip->items) ?></td>
                </tr>
                <tr>
                    <th><?= __('Netweight') ?></th>
                    <td><?= $this->Number->format($trip->netweight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grossweight') ?></th>
                    <td><?= $this->Number->format($trip->grossweight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tare') ?></th>
                    <td><?= $this->Number->format($trip->tare) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbitemwb') ?></th>
                    <td><?= $this->Number->format($trip->nbitemwb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbitemcka') ?></th>
                    <td><?= $this->Number->format($trip->nbitemcka) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($trip->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Riskop') ?></th>
                    <td><?= $this->Number->format($trip->riskop) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exploaddate') ?></th>
                    <td><?= h($trip->exploaddate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loaddate') ?></th>
                    <td><?= h($trip->loaddate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateckops') ?></th>
                    <td><?= h($trip->dateckops) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datewbein') ?></th>
                    <td><?= h($trip->datewbein) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datewbout') ?></th>
                    <td><?= h($trip->datewbout) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ckadate') ?></th>
                    <td><?= h($trip->ckadate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expbpdate') ?></th>
                    <td><?= h($trip->expbpdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bpdate') ?></th>
                    <td><?= h($trip->bpdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fxodate') ?></th>
                    <td><?= h($trip->fxodate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exitdrcdate') ?></th>
                    <td><?= h($trip->exitdrcdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exppkldate') ?></th>
                    <td><?= h($trip->exppkldate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pkldate') ?></th>
                    <td><?= h($trip->pkldate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expdocdate') ?></th>
                    <td><?= h($trip->expdocdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Docdate') ?></th>
                    <td><?= h($trip->docdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expdispdate') ?></th>
                    <td><?= h($trip->expdispdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dispdate') ?></th>
                    <td><?= h($trip->dispdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datetrip') ?></th>
                    <td><?= h($trip->datetrip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($trip->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Invoicedate') ?></th>
                    <td><?= h($trip->invoicedate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Arrdate') ?></th>
                    <td><?= h($trip->arrdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Samplingdate') ?></th>
                    <td><?= h($trip->samplingdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stickercheckdate') ?></th>
                    <td><?= h($trip->stickercheckdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loadcheckdate') ?></th>
                    <td><?= h($trip->loadcheckdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Riskdate') ?></th>
                    <td><?= h($trip->riskdate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>