<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sousmenu2> $sousmenu2
 */
?>
<div class="sousmenu2 index content">
    <?= $this->Html->link(__('New Sousmenu2'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sousmenu2') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idsousmenu2') ?></th>
                    <th><?= $this->Paginator->sort('idsousmenu') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('page') ?></th>
                    <th><?= $this->Paginator->sort('nomsousmenu2') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th><?= $this->Paginator->sort('idpage') ?></th>
                    <th><?= $this->Paginator->sort('nomsousmenu2en') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sousmenu2 as $sousmenu2): ?>
                <tr>
                    <td><?= $this->Number->format($sousmenu2->idsousmenu2) ?></td>
                    <td><?= $this->Number->format($sousmenu2->idsousmenu) ?></td>
                    <td><?= h($sousmenu2->url) ?></td>
                    <td><?= h($sousmenu2->page) ?></td>
                    <td><?= h($sousmenu2->nomsousmenu2) ?></td>
                    <td><?= h($sousmenu2->statut) ?></td>
                    <td><?= $this->Number->format($sousmenu2->iduser) ?></td>
                    <td><?= h($sousmenu2->datemiseajour) ?></td>
                    <td><?= $this->Number->format($sousmenu2->idpage) ?></td>
                    <td><?= h($sousmenu2->nomsousmenu2en) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sousmenu2->idsousmenu2]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sousmenu2->idsousmenu2]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sousmenu2->idsousmenu2], ['confirm' => __('Are you sure you want to delete # {0}?', $sousmenu2->idsousmenu2)]) ?>
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