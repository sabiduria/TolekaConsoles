<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cohbag> $cohbags
 */
?>
<div class="cohbags index content">
    <?= $this->Html->link(__('New Cohbag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cohbags') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('bagid') ?></th>
                    <th><?= $this->Paginator->sort('composite') ?></th>
                    <th><?= $this->Paginator->sort('dateprod') ?></th>
                    <th><?= $this->Paginator->sort('poids') ?></th>
                    <th><?= $this->Paginator->sort('localisation') ?></th>
                    <th><?= $this->Paginator->sort('h2o') ?></th>
                    <th><?= $this->Paginator->sort('co') ?></th>
                    <th><?= $this->Paginator->sort('co_cont') ?></th>
                    <th><?= $this->Paginator->sort('uranium') ?></th>
                    <th><?= $this->Paginator->sort('mg') ?></th>
                    <th><?= $this->Paginator->sort('fe') ?></th>
                    <th><?= $this->Paginator->sort('zn') ?></th>
                    <th><?= $this->Paginator->sort('ca') ?></th>
                    <th><?= $this->Paginator->sort('mn') ?></th>
                    <th><?= $this->Paginator->sort('ni') ?></th>
                    <th><?= $this->Paginator->sort('al') ?></th>
                    <th><?= $this->Paginator->sort('cu') ?></th>
                    <th><?= $this->Paginator->sort('charge') ?></th>
                    <th><?= $this->Paginator->sort('spec') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('dateload') ?></th>
                    <th><?= $this->Paginator->sort('dateact') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('vpoids') ?></th>
                    <th><?= $this->Paginator->sort('vh2o') ?></th>
                    <th><?= $this->Paginator->sort('vco') ?></th>
                    <th><?= $this->Paginator->sort('produith2o') ?></th>
                    <th><?= $this->Paginator->sort('produitco') ?></th>
                    <th><?= $this->Paginator->sort('seal') ?></th>
                    <th><?= $this->Paginator->sort('dateadded') ?></th>
                    <th><?= $this->Paginator->sort('datechecked') ?></th>
                    <th><?= $this->Paginator->sort('synced') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cohbags as $cohbag): ?>
                <tr>
                    <td><?= $this->Number->format($cohbag->id) ?></td>
                    <td><?= h($cohbag->bagid) ?></td>
                    <td><?= h($cohbag->composite) ?></td>
                    <td><?= h($cohbag->dateprod) ?></td>
                    <td><?= $this->Number->format($cohbag->poids) ?></td>
                    <td><?= h($cohbag->localisation) ?></td>
                    <td><?= h($cohbag->h2o) ?></td>
                    <td><?= $this->Number->format($cohbag->co) ?></td>
                    <td><?= $this->Number->format($cohbag->co_cont) ?></td>
                    <td><?= $this->Number->format($cohbag->uranium) ?></td>
                    <td><?= $this->Number->format($cohbag->mg) ?></td>
                    <td><?= $this->Number->format($cohbag->fe) ?></td>
                    <td><?= $this->Number->format($cohbag->zn) ?></td>
                    <td><?= $this->Number->format($cohbag->ca) ?></td>
                    <td><?= $this->Number->format($cohbag->mn) ?></td>
                    <td><?= $this->Number->format($cohbag->ni) ?></td>
                    <td><?= $this->Number->format($cohbag->al) ?></td>
                    <td><?= $this->Number->format($cohbag->cu) ?></td>
                    <td><?= h($cohbag->charge) ?></td>
                    <td><?= h($cohbag->spec) ?></td>
                    <td><?= h($cohbag->lotnumber) ?></td>
                    <td><?= h($cohbag->imexlot) ?></td>
                    <td><?= h($cohbag->dateload) ?></td>
                    <td><?= h($cohbag->dateact) ?></td>
                    <td><?= $this->Number->format($cohbag->iduser) ?></td>
                    <td><?= $this->Number->format($cohbag->vpoids) ?></td>
                    <td><?= $this->Number->format($cohbag->vh2o) ?></td>
                    <td><?= $this->Number->format($cohbag->vco) ?></td>
                    <td><?= $this->Number->format($cohbag->produith2o) ?></td>
                    <td><?= $this->Number->format($cohbag->produitco) ?></td>
                    <td><?= h($cohbag->seal) ?></td>
                    <td><?= h($cohbag->dateadded) ?></td>
                    <td><?= h($cohbag->datechecked) ?></td>
                    <td><?= h($cohbag->synced) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cohbag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cohbag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cohbag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cohbag->id)]) ?>
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