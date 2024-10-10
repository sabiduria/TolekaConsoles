<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sousmenu> $sousmenu
 */
?>
<div class="sousmenu index content">
    <?= $this->Html->link(__('New Sousmenu'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sousmenu') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idsousmenu') ?></th>
                    <th><?= $this->Paginator->sort('idmenu') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('page') ?></th>
                    <th><?= $this->Paginator->sort('nomsousmenu') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sousmenu as $sousmenu): ?>
                <tr>
                    <td><?= $this->Number->format($sousmenu->idsousmenu) ?></td>
                    <td><?= $this->Number->format($sousmenu->idmenu) ?></td>
                    <td><?= h($sousmenu->url) ?></td>
                    <td><?= h($sousmenu->page) ?></td>
                    <td><?= h($sousmenu->nomsousmenu) ?></td>
                    <td><?= h($sousmenu->statut) ?></td>
                    <td><?= $this->Number->format($sousmenu->iduser) ?></td>
                    <td><?= h($sousmenu->datemiseajour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sousmenu->idsousmenu]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sousmenu->idsousmenu]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sousmenu->idsousmenu], ['confirm' => __('Are you sure you want to delete # {0}?', $sousmenu->idsousmenu)]) ?>
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