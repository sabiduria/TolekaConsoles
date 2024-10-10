<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Documentsadministratif> $documentsadministratif
 */
?>
<div class="documentsadministratif index content">
    <?= $this->Html->link(__('New Documentsadministratif'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Documentsadministratif') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idemp') ?></th>
                    <th><?= $this->Paginator->sort('matricule') ?></th>
                    <th><?= $this->Paginator->sort('document') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('categorie') ?></th>
                    <th><?= $this->Paginator->sort('commentaire') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documentsadministratif as $documentsadministratif): ?>
                <tr>
                    <td><?= $this->Number->format($documentsadministratif->id) ?></td>
                    <td><?= $this->Number->format($documentsadministratif->idemp) ?></td>
                    <td><?= h($documentsadministratif->matricule) ?></td>
                    <td><?= h($documentsadministratif->document) ?></td>
                    <td><?= h($documentsadministratif->type) ?></td>
                    <td><?= h($documentsadministratif->categorie) ?></td>
                    <td><?= h($documentsadministratif->commentaire) ?></td>
                    <td><?= $this->Number->format($documentsadministratif->iduser) ?></td>
                    <td><?= h($documentsadministratif->datemiseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $documentsadministratif->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documentsadministratif->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documentsadministratif->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentsadministratif->id)]) ?>
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