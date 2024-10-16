<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Article> $articles
 */
?>
<div class="articles index content">
    <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Articles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('designation') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('utilite') ?></th>
                    <th><?= $this->Paginator->sort('codemagasin') ?></th>
                    <th><?= $this->Paginator->sort('coutmagasin') ?></th>
                    <th><?= $this->Paginator->sort('qtestock') ?></th>
                    <th><?= $this->Paginator->sort('seuil') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $this->Number->format($article->id) ?></td>
                    <td><?= h($article->designation) ?></td>
                    <td><?= h($article->type) ?></td>
                    <td><?= h($article->utilite) ?></td>
                    <td><?= h($article->codemagasin) ?></td>
                    <td><?= h($article->coutmagasin) ?></td>
                    <td><?= $this->Number->format($article->qtestock) ?></td>
                    <td><?= $this->Number->format($article->seuil) ?></td>
                    <td><?= h($article->date) ?></td>
                    <td><?= $this->Number->format($article->iduser) ?></td>
                    <td><?= h($article->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
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