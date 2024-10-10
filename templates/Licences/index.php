<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Licence> $licences
 */
?>
<div class="licences index content">
    <?= $this->Html->link(__('New Licence'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Licences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codelic') ?></th>
                    <th><?= $this->Paginator->sort('tonnage') ?></th>
                    <th><?= $this->Paginator->sort('agence') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('produit') ?></th>
                    <th><?= $this->Paginator->sort('typeproduit') ?></th>
                    <th><?= $this->Paginator->sort('trancheteneur') ?></th>
                    <th><?= $this->Paginator->sort('periode') ?></th>
                    <th><?= $this->Paginator->sort('validite') ?></th>
                    <th><?= $this->Paginator->sort('expiration') ?></th>
                    <th><?= $this->Paginator->sort('tonnagerestant') ?></th>
                    <th><?= $this->Paginator->sort('seuil') ?></th>
                    <th><?= $this->Paginator->sort('frontiere') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('moyentrans') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($licences as $licence): ?>
                <tr>
                    <td><?= $this->Number->format($licence->id) ?></td>
                    <td><?= h($licence->codelic) ?></td>
                    <td><?= $this->Number->format($licence->tonnage) ?></td>
                    <td><?= h($licence->agence) ?></td>
                    <td><?= h($licence->destination) ?></td>
                    <td><?= h($licence->produit) ?></td>
                    <td><?= h($licence->typeproduit) ?></td>
                    <td><?= h($licence->trancheteneur) ?></td>
                    <td><?= h($licence->periode) ?></td>
                    <td><?= $this->Number->format($licence->validite) ?></td>
                    <td><?= h($licence->expiration) ?></td>
                    <td><?= h($licence->tonnagerestant) ?></td>
                    <td><?= h($licence->seuil) ?></td>
                    <td><?= h($licence->frontiere) ?></td>
                    <td><?= h($licence->statut) ?></td>
                    <td><?= h($licence->date) ?></td>
                    <td><?= $this->Number->format($licence->iduser) ?></td>
                    <td><?= h($licence->moyentrans) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $licence->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $licence->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $licence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licence->id)]) ?>
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