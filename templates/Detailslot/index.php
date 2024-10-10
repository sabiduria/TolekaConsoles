<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Detailslot> $detailslot
 */
?>
<div class="detailslot index content">
    <?= $this->Html->link(__('New Detailslot'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detailslot') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numlot') ?></th>
                    <th><?= $this->Paginator->sort('idbag') ?></th>
                    <th><?= $this->Paginator->sort('bagid') ?></th>
                    <th><?= $this->Paginator->sort('h20') ?></th>
                    <th><?= $this->Paginator->sort('co') ?></th>
                    <th><?= $this->Paginator->sort('u') ?></th>
                    <th><?= $this->Paginator->sort('mg') ?></th>
                    <th><?= $this->Paginator->sort('mn') ?></th>
                    <th><?= $this->Paginator->sort('ni') ?></th>
                    <th><?= $this->Paginator->sort('fe') ?></th>
                    <th><?= $this->Paginator->sort('ca') ?></th>
                    <th><?= $this->Paginator->sort('si') ?></th>
                    <th><?= $this->Paginator->sort('al') ?></th>
                    <th><?= $this->Paginator->sort('cu') ?></th>
                    <th><?= $this->Paginator->sort('cocont') ?></th>
                    <th><?= $this->Paginator->sort('spec') ?></th>
                    <th><?= $this->Paginator->sort('user') ?></th>
                    <th><?= $this->Paginator->sort('datecrea') ?></th>
                    <th><?= $this->Paginator->sort('dateprod') ?></th>
                    <th><?= $this->Paginator->sort('poids') ?></th>
                    <th><?= $this->Paginator->sort('composite') ?></th>
                    <th><?= $this->Paginator->sort('zn') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detailslot as $detailslot): ?>
                <tr>
                    <td><?= $this->Number->format($detailslot->id) ?></td>
                    <td><?= h($detailslot->numlot) ?></td>
                    <td><?= $this->Number->format($detailslot->idbag) ?></td>
                    <td><?= h($detailslot->bagid) ?></td>
                    <td><?= h($detailslot->h20) ?></td>
                    <td><?= h($detailslot->co) ?></td>
                    <td><?= h($detailslot->u) ?></td>
                    <td><?= h($detailslot->mg) ?></td>
                    <td><?= h($detailslot->mn) ?></td>
                    <td><?= h($detailslot->ni) ?></td>
                    <td><?= h($detailslot->fe) ?></td>
                    <td><?= h($detailslot->ca) ?></td>
                    <td><?= h($detailslot->si) ?></td>
                    <td><?= h($detailslot->al) ?></td>
                    <td><?= h($detailslot->cu) ?></td>
                    <td><?= h($detailslot->cocont) ?></td>
                    <td><?= h($detailslot->spec) ?></td>
                    <td><?= $this->Number->format($detailslot->user) ?></td>
                    <td><?= h($detailslot->datecrea) ?></td>
                    <td><?= h($detailslot->dateprod) ?></td>
                    <td><?= h($detailslot->poids) ?></td>
                    <td><?= h($detailslot->composite) ?></td>
                    <td><?= h($detailslot->zn) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $detailslot->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detailslot->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detailslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailslot->id)]) ?>
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