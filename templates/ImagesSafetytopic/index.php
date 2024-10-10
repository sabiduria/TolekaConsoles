<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ImagesSafetytopic> $imagesSafetytopic
 */
?>
<div class="imagesSafetytopic index content">
    <?= $this->Html->link(__('New Images Safetytopic'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Images Safetytopic') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idtopic') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imagesSafetytopic as $imagesSafetytopic): ?>
                <tr>
                    <td><?= $this->Number->format($imagesSafetytopic->id) ?></td>
                    <td><?= $this->Number->format($imagesSafetytopic->idtopic) ?></td>
                    <td><?= h($imagesSafetytopic->image) ?></td>
                    <td><?= $this->Number->format($imagesSafetytopic->iduser) ?></td>
                    <td><?= h($imagesSafetytopic->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $imagesSafetytopic->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagesSafetytopic->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagesSafetytopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagesSafetytopic->id)]) ?>
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