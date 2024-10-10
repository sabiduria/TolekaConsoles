<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Clearingrisk> $clearingrisks
 */
?>
<div class="clearingrisks index content">
    <?= $this->Html->link(__('New Clearingrisk'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clearingrisks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('riskdate') ?></th>
                    <th><?= $this->Paginator->sort('riskop') ?></th>
                    <th><?= $this->Paginator->sort('commentrisk') ?></th>
                    <th><?= $this->Paginator->sort('statutrisk') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clearingrisks as $clearingrisk): ?>
                <tr>
                    <td><?= $this->Number->format($clearingrisk->id) ?></td>
                    <td><?= h($clearingrisk->lotnumber) ?></td>
                    <td><?= h($clearingrisk->imexlot) ?></td>
                    <td><?= h($clearingrisk->riskdate) ?></td>
                    <td><?= h($clearingrisk->riskop) ?></td>
                    <td><?= h($clearingrisk->commentrisk) ?></td>
                    <td><?= h($clearingrisk->statutrisk) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clearingrisk->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clearingrisk->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clearingrisk->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clearingrisk->id)]) ?>
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