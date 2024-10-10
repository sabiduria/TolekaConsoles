<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Photosbag> $photosbags
 */
?>
<div class="photosbags index content">
    <?= $this->Html->link(__('New Photosbag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Photosbags') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('bagid') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($photosbags as $photosbag): ?>
                <tr>
                    <td><?= $this->Number->format($photosbag->id) ?></td>
                    <td><?= h($photosbag->bagid) ?></td>
                    <td><?= h($photosbag->photo) ?></td>
                    <td><?= $this->Number->format($photosbag->iduser) ?></td>
                    <td><?= h($photosbag->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $photosbag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $photosbag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $photosbag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photosbag->id)]) ?>
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