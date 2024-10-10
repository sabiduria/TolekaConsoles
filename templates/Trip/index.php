<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Trip> $trip
 */
?>
<div class="trip index content">
    <?= $this->Html->link(__('New Trip'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Trip') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('prealerte') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('exploaddate') ?></th>
                    <th><?= $this->Paginator->sort('tonnagetoload') ?></th>
                    <th><?= $this->Paginator->sort('tonnageload') ?></th>
                    <th><?= $this->Paginator->sort('loaddate') ?></th>
                    <th><?= $this->Paginator->sort('templot') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('items') ?></th>
                    <th><?= $this->Paginator->sort('loadassist') ?></th>
                    <th><?= $this->Paginator->sort('ckopsop') ?></th>
                    <th><?= $this->Paginator->sort('forkliftop1') ?></th>
                    <th><?= $this->Paginator->sort('dateckops') ?></th>
                    <th><?= $this->Paginator->sort('datewbein') ?></th>
                    <th><?= $this->Paginator->sort('datewbout') ?></th>
                    <th><?= $this->Paginator->sort('wbopin') ?></th>
                    <th><?= $this->Paginator->sort('wbopout') ?></th>
                    <th><?= $this->Paginator->sort('netweight') ?></th>
                    <th><?= $this->Paginator->sort('grossweight') ?></th>
                    <th><?= $this->Paginator->sort('wbticket') ?></th>
                    <th><?= $this->Paginator->sort('tare') ?></th>
                    <th><?= $this->Paginator->sort('nbitemwb') ?></th>
                    <th><?= $this->Paginator->sort('commentwb') ?></th>
                    <th><?= $this->Paginator->sort('ckadate') ?></th>
                    <th><?= $this->Paginator->sort('ckaop') ?></th>
                    <th><?= $this->Paginator->sort('nbitemcka') ?></th>
                    <th><?= $this->Paginator->sort('commentcka') ?></th>
                    <th><?= $this->Paginator->sort('expbpdate') ?></th>
                    <th><?= $this->Paginator->sort('bpdate') ?></th>
                    <th><?= $this->Paginator->sort('bpop') ?></th>
                    <th><?= $this->Paginator->sort('fxodate') ?></th>
                    <th><?= $this->Paginator->sort('fxoop') ?></th>
                    <th><?= $this->Paginator->sort('exitdrcdate') ?></th>
                    <th><?= $this->Paginator->sort('exitdrcop') ?></th>
                    <th><?= $this->Paginator->sort('exppkldate') ?></th>
                    <th><?= $this->Paginator->sort('pkldate') ?></th>
                    <th><?= $this->Paginator->sort('pklop') ?></th>
                    <th><?= $this->Paginator->sort('expdocdate') ?></th>
                    <th><?= $this->Paginator->sort('docdate') ?></th>
                    <th><?= $this->Paginator->sort('docop') ?></th>
                    <th><?= $this->Paginator->sort('expdispdate') ?></th>
                    <th><?= $this->Paginator->sort('dispdate') ?></th>
                    <th><?= $this->Paginator->sort('dispop') ?></th>
                    <th><?= $this->Paginator->sort('statutload') ?></th>
                    <th><?= $this->Paginator->sort('statutckops') ?></th>
                    <th><?= $this->Paginator->sort('statutcka') ?></th>
                    <th><?= $this->Paginator->sort('statutbp') ?></th>
                    <th><?= $this->Paginator->sort('statutfxo') ?></th>
                    <th><?= $this->Paginator->sort('statutpkl') ?></th>
                    <th><?= $this->Paginator->sort('statutexitdrc') ?></th>
                    <th><?= $this->Paginator->sort('statutdoc') ?></th>
                    <th><?= $this->Paginator->sort('statutdisp') ?></th>
                    <th><?= $this->Paginator->sort('statutwb') ?></th>
                    <th><?= $this->Paginator->sort('datetrip') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statuttrip') ?></th>
                    <th><?= $this->Paginator->sort('moisgestion') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('invoicedate') ?></th>
                    <th><?= $this->Paginator->sort('invoiceop') ?></th>
                    <th><?= $this->Paginator->sort('statutinvoice') ?></th>
                    <th><?= $this->Paginator->sort('commentdisp') ?></th>
                    <th><?= $this->Paginator->sort('arrdate') ?></th>
                    <th><?= $this->Paginator->sort('typetransp') ?></th>
                    <th><?= $this->Paginator->sort('samplingdate') ?></th>
                    <th><?= $this->Paginator->sort('samplingop') ?></th>
                    <th><?= $this->Paginator->sort('stickercheckdate') ?></th>
                    <th><?= $this->Paginator->sort('stickercheckop') ?></th>
                    <th><?= $this->Paginator->sort('loadcheckdate') ?></th>
                    <th><?= $this->Paginator->sort('loadcheckop') ?></th>
                    <th><?= $this->Paginator->sort('riskdate') ?></th>
                    <th><?= $this->Paginator->sort('statutrisk') ?></th>
                    <th><?= $this->Paginator->sort('riskop') ?></th>
                    <th><?= $this->Paginator->sort('commentrisk') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trip as $trip): ?>
                <tr>
                    <td><?= $this->Number->format($trip->id) ?></td>
                    <td><?= $this->Number->format($trip->prealerte) ?></td>
                    <td><?= h($trip->produit) ?></td>
                    <td><?= h($trip->exploaddate) ?></td>
                    <td><?= h($trip->tonnagetoload) ?></td>
                    <td><?= $this->Number->format($trip->tonnageload) ?></td>
                    <td><?= h($trip->loaddate) ?></td>
                    <td><?= h($trip->templot) ?></td>
                    <td><?= h($trip->imexlot) ?></td>
                    <td><?= $this->Number->format($trip->items) ?></td>
                    <td><?= h($trip->loadassist) ?></td>
                    <td><?= h($trip->ckopsop) ?></td>
                    <td><?= h($trip->forkliftop1) ?></td>
                    <td><?= h($trip->dateckops) ?></td>
                    <td><?= h($trip->datewbein) ?></td>
                    <td><?= h($trip->datewbout) ?></td>
                    <td><?= h($trip->wbopin) ?></td>
                    <td><?= h($trip->wbopout) ?></td>
                    <td><?= $this->Number->format($trip->netweight) ?></td>
                    <td><?= $this->Number->format($trip->grossweight) ?></td>
                    <td><?= h($trip->wbticket) ?></td>
                    <td><?= $this->Number->format($trip->tare) ?></td>
                    <td><?= $this->Number->format($trip->nbitemwb) ?></td>
                    <td><?= h($trip->commentwb) ?></td>
                    <td><?= h($trip->ckadate) ?></td>
                    <td><?= h($trip->ckaop) ?></td>
                    <td><?= $this->Number->format($trip->nbitemcka) ?></td>
                    <td><?= h($trip->commentcka) ?></td>
                    <td><?= h($trip->expbpdate) ?></td>
                    <td><?= h($trip->bpdate) ?></td>
                    <td><?= h($trip->bpop) ?></td>
                    <td><?= h($trip->fxodate) ?></td>
                    <td><?= h($trip->fxoop) ?></td>
                    <td><?= h($trip->exitdrcdate) ?></td>
                    <td><?= h($trip->exitdrcop) ?></td>
                    <td><?= h($trip->exppkldate) ?></td>
                    <td><?= h($trip->pkldate) ?></td>
                    <td><?= h($trip->pklop) ?></td>
                    <td><?= h($trip->expdocdate) ?></td>
                    <td><?= h($trip->docdate) ?></td>
                    <td><?= h($trip->docop) ?></td>
                    <td><?= h($trip->expdispdate) ?></td>
                    <td><?= h($trip->dispdate) ?></td>
                    <td><?= h($trip->dispop) ?></td>
                    <td><?= h($trip->statutload) ?></td>
                    <td><?= h($trip->statutckops) ?></td>
                    <td><?= h($trip->statutcka) ?></td>
                    <td><?= h($trip->statutbp) ?></td>
                    <td><?= h($trip->statutfxo) ?></td>
                    <td><?= h($trip->statutpkl) ?></td>
                    <td><?= h($trip->statutexitdrc) ?></td>
                    <td><?= h($trip->statutdoc) ?></td>
                    <td><?= h($trip->statutdisp) ?></td>
                    <td><?= h($trip->statutwb) ?></td>
                    <td><?= h($trip->datetrip) ?></td>
                    <td><?= $this->Number->format($trip->iduser) ?></td>
                    <td><?= h($trip->statuttrip) ?></td>
                    <td><?= h($trip->moisgestion) ?></td>
                    <td><?= h($trip->updated) ?></td>
                    <td><?= h($trip->invoicedate) ?></td>
                    <td><?= h($trip->invoiceop) ?></td>
                    <td><?= h($trip->statutinvoice) ?></td>
                    <td><?= h($trip->commentdisp) ?></td>
                    <td><?= h($trip->arrdate) ?></td>
                    <td><?= h($trip->typetransp) ?></td>
                    <td><?= h($trip->samplingdate) ?></td>
                    <td><?= h($trip->samplingop) ?></td>
                    <td><?= h($trip->stickercheckdate) ?></td>
                    <td><?= h($trip->stickercheckop) ?></td>
                    <td><?= h($trip->loadcheckdate) ?></td>
                    <td><?= h($trip->loadcheckop) ?></td>
                    <td><?= h($trip->riskdate) ?></td>
                    <td><?= h($trip->statutrisk) ?></td>
                    <td><?= $this->Number->format($trip->riskop) ?></td>
                    <td><?= h($trip->commentrisk) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trip->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trip->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trip->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>