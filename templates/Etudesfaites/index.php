<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Etudesfaite> $etudesfaites
 */
?>
<div class="etudesfaites index content">
    <?= $this->Html->link(__('New Etudesfaite'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Etudesfaites') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('periode') ?></th>
                    <th><?= $this->Paginator->sort('ecole') ?></th>
                    <th><?= $this->Paginator->sort('classes') ?></th>
                    <th><?= $this->Paginator->sort('ville') ?></th>
                    <th><?= $this->Paginator->sort('pieceobtenue') ?></th>
                    <th><?= $this->Paginator->sort('dateenregistrement') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudesfaites as $etudesfaite): ?>
                <tr>
                    <td><?= $this->Number->format($etudesfaite->id) ?></td>
                    <td><?= $this->Number->format($etudesfaite->iduser) ?></td>
                    <td><?= h($etudesfaite->periode) ?></td>
                    <td><?= h($etudesfaite->ecole) ?></td>
                    <td><?= h($etudesfaite->classes) ?></td>
                    <td><?= h($etudesfaite->ville) ?></td>
                    <td><?= h($etudesfaite->pieceobtenue) ?></td>
                    <td><?= h($etudesfaite->dateenregistrement) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $etudesfaite->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etudesfaite->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etudesfaite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudesfaite->id)]) ?>
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