<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Destination> $destinations
 */
?>
<div class="destinations index content">
    <?= $this->Html->link(__('New Destination'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Destinations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pays') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('corridor') ?></th>
                    <th><?= $this->Paginator->sort('codeprea') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('tonnagerequis') ?></th>
                    <th><?= $this->Paginator->sort('tonnageenvoye') ?></th>
                    <th><?= $this->Paginator->sort('tonnagerestant') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($destinations as $destination): ?>
                <tr>
                    <td><?= $this->Number->format($destination->id) ?></td>
                    <td><?= h($destination->pays) ?></td>
                    <td><?= h($destination->destination) ?></td>
                    <td><?= h($destination->corridor) ?></td>
                    <td><?= h($destination->codeprea) ?></td>
                    <td><?= h($destination->produit) ?></td>
                    <td><?= $this->Number->format($destination->tonnagerequis) ?></td>
                    <td><?= $this->Number->format($destination->tonnageenvoye) ?></td>
                    <td><?= $this->Number->format($destination->tonnagerestant) ?></td>
                    <td><?= h($destination->date) ?></td>
                    <td><?= $this->Number->format($destination->iduser) ?></td>
                    <td><?= h($destination->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $destination->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $destination->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $destination->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destination->id)]) ?>
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