<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Agencedouane> $agencedouane
 */
?>
<div class="agencedouane index content">
    <?= $this->Html->link(__('New Agencedouane'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agencedouane') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomagence') ?></th>
                    <th><?= $this->Paginator->sort('responsable') ?></th>
                    <th><?= $this->Paginator->sort('telresp') ?></th>
                    <th><?= $this->Paginator->sort('emailresp') ?></th>
                    <th><?= $this->Paginator->sort('agentsite') ?></th>
                    <th><?= $this->Paginator->sort('telagent') ?></th>
                    <th><?= $this->Paginator->sort('emailagent') ?></th>
                    <th><?= $this->Paginator->sort('pays') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agencedouane as $agencedouane): ?>
                <tr>
                    <td><?= $this->Number->format($agencedouane->id) ?></td>
                    <td><?= h($agencedouane->nomagence) ?></td>
                    <td><?= h($agencedouane->responsable) ?></td>
                    <td><?= h($agencedouane->telresp) ?></td>
                    <td><?= h($agencedouane->emailresp) ?></td>
                    <td><?= h($agencedouane->agentsite) ?></td>
                    <td><?= h($agencedouane->telagent) ?></td>
                    <td><?= h($agencedouane->emailagent) ?></td>
                    <td><?= h($agencedouane->pays) ?></td>
                    <td><?= h($agencedouane->statut) ?></td>
                    <td><?= h($agencedouane->date) ?></td>
                    <td><?= $this->Number->format($agencedouane->iduser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agencedouane->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agencedouane->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agencedouane->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agencedouane->id)]) ?>
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