<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Forecast> $forecast
 */
?>
<div class="forecast index content">
    <?= $this->Html->link(__('New Forecast'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Forecast') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('moisgestion') ?></th>
                    <th><?= $this->Paginator->sort('scancu') ?></th>
                    <th><?= $this->Paginator->sort('scancoh') ?></th>
                    <th><?= $this->Paginator->sort('charcu') ?></th>
                    <th><?= $this->Paginator->sort('charcoh') ?></th>
                    <th><?= $this->Paginator->sort('doccu') ?></th>
                    <th><?= $this->Paginator->sort('doccoh') ?></th>
                    <th><?= $this->Paginator->sort('dispcu') ?></th>
                    <th><?= $this->Paginator->sort('dispcoh') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($forecast as $forecast): ?>
                <tr>
                    <td><?= $this->Number->format($forecast->id) ?></td>
                    <td><?= h($forecast->moisgestion) ?></td>
                    <td><?= $this->Number->format($forecast->scancu) ?></td>
                    <td><?= $this->Number->format($forecast->scancoh) ?></td>
                    <td><?= $this->Number->format($forecast->charcu) ?></td>
                    <td><?= $this->Number->format($forecast->charcoh) ?></td>
                    <td><?= $this->Number->format($forecast->doccu) ?></td>
                    <td><?= $this->Number->format($forecast->doccoh) ?></td>
                    <td><?= $this->Number->format($forecast->dispcu) ?></td>
                    <td><?= $this->Number->format($forecast->dispcoh) ?></td>
                    <td><?= $this->Number->format($forecast->iduser) ?></td>
                    <td><?= h($forecast->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $forecast->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $forecast->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $forecast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forecast->id)]) ?>
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