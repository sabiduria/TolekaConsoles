<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Kcclabresult> $kcclabresults
 */
?>
<div class="kcclabresults index content">
    <?= $this->Html->link(__('New Kcclabresult'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kcclabresults') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('composite') ?></th>
                    <th><?= $this->Paginator->sort('co') ?></th>
                    <th><?= $this->Paginator->sort('al') ?></th>
                    <th><?= $this->Paginator->sort('ca') ?></th>
                    <th><?= $this->Paginator->sort('cu') ?></th>
                    <th><?= $this->Paginator->sort('fe') ?></th>
                    <th><?= $this->Paginator->sort('mg') ?></th>
                    <th><?= $this->Paginator->sort('mn') ?></th>
                    <th><?= $this->Paginator->sort('ni') ?></th>
                    <th><?= $this->Paginator->sort('zn') ?></th>
                    <th><?= $this->Paginator->sort('u') ?></th>
                    <th><?= $this->Paginator->sort('h2o') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kcclabresults as $kcclabresult): ?>
                <tr>
                    <td><?= $this->Number->format($kcclabresult->id) ?></td>
                    <td><?= h($kcclabresult->composite) ?></td>
                    <td><?= $this->Number->format($kcclabresult->co) ?></td>
                    <td><?= $this->Number->format($kcclabresult->al) ?></td>
                    <td><?= $this->Number->format($kcclabresult->ca) ?></td>
                    <td><?= $this->Number->format($kcclabresult->cu) ?></td>
                    <td><?= $this->Number->format($kcclabresult->fe) ?></td>
                    <td><?= $this->Number->format($kcclabresult->mg) ?></td>
                    <td><?= $this->Number->format($kcclabresult->mn) ?></td>
                    <td><?= $this->Number->format($kcclabresult->ni) ?></td>
                    <td><?= $this->Number->format($kcclabresult->zn) ?></td>
                    <td><?= $this->Number->format($kcclabresult->u) ?></td>
                    <td><?= $this->Number->format($kcclabresult->h2o) ?></td>
                    <td><?= h($kcclabresult->date) ?></td>
                    <td><?= $this->Number->format($kcclabresult->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kcclabresult->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kcclabresult->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kcclabresult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kcclabresult->id)]) ?>
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