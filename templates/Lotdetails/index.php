<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lotdetail> $lotdetails
 */
?>
<div class="lotdetails index content">
    <?= $this->Html->link(__('New Lotdetail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lotdetails') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lotid') ?></th>
                    <th><?= $this->Paginator->sort('bagid') ?></th>
                    <th><?= $this->Paginator->sort('bagnumber') ?></th>
                    <th><?= $this->Paginator->sort('poids') ?></th>
                    <th><?= $this->Paginator->sort('h2o') ?></th>
                    <th><?= $this->Paginator->sort('co') ?></th>
                    <th><?= $this->Paginator->sort('fe') ?></th>
                    <th><?= $this->Paginator->sort('ca') ?></th>
                    <th><?= $this->Paginator->sort('mg') ?></th>
                    <th><?= $this->Paginator->sort('ni') ?></th>
                    <th><?= $this->Paginator->sort('mn') ?></th>
                    <th><?= $this->Paginator->sort('si') ?></th>
                    <th><?= $this->Paginator->sort('al') ?></th>
                    <th><?= $this->Paginator->sort('cu') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lotdetails as $lotdetail): ?>
                <tr>
                    <td><?= $this->Number->format($lotdetail->id) ?></td>
                    <td><?= $this->Number->format($lotdetail->lotid) ?></td>
                    <td><?= $this->Number->format($lotdetail->bagid) ?></td>
                    <td><?= h($lotdetail->bagnumber) ?></td>
                    <td><?= $this->Number->format($lotdetail->poids) ?></td>
                    <td><?= $this->Number->format($lotdetail->h2o) ?></td>
                    <td><?= $this->Number->format($lotdetail->co) ?></td>
                    <td><?= $this->Number->format($lotdetail->fe) ?></td>
                    <td><?= $this->Number->format($lotdetail->ca) ?></td>
                    <td><?= $this->Number->format($lotdetail->mg) ?></td>
                    <td><?= $this->Number->format($lotdetail->ni) ?></td>
                    <td><?= $this->Number->format($lotdetail->mn) ?></td>
                    <td><?= $this->Number->format($lotdetail->si) ?></td>
                    <td><?= $this->Number->format($lotdetail->al) ?></td>
                    <td><?= $this->Number->format($lotdetail->cu) ?></td>
                    <td><?= h($lotdetail->statut) ?></td>
                    <td><?= h($lotdetail->date) ?></td>
                    <td><?= $this->Number->format($lotdetail->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lotdetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lotdetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lotdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotdetail->id)]) ?>
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