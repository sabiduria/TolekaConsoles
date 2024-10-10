<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Etatcivil> $etatcivil
 */
?>
<div class="etatcivil index content">
    <?= $this->Html->link(__('New Etatcivil'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Etatcivil') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('statutmarital') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etatcivil as $etatcivil): ?>
                <tr>
                    <td><?= $this->Number->format($etatcivil->id) ?></td>
                    <td><?= h($etatcivil->statutmarital) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $etatcivil->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etatcivil->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etatcivil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatcivil->id)]) ?>
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