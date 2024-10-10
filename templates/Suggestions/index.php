<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Suggestion> $suggestions
 */
?>
<div class="suggestions index content">
    <?= $this->Html->link(__('New Suggestion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Suggestions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('reponse') ?></th>
                    <th><?= $this->Paginator->sort('iduser2') ?></th>
                    <th><?= $this->Paginator->sort('date2') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suggestions as $suggestion): ?>
                <tr>
                    <td><?= $this->Number->format($suggestion->id) ?></td>
                    <td><?= $this->Number->format($suggestion->iduser) ?></td>
                    <td><?= h($suggestion->date) ?></td>
                    <td><?= h($suggestion->reponse) ?></td>
                    <td><?= $this->Number->format($suggestion->iduser2) ?></td>
                    <td><?= h($suggestion->date2) ?></td>
                    <td><?= h($suggestion->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $suggestion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $suggestion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $suggestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestion->id)]) ?>
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