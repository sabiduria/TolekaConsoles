<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Agent> $agent
 */
?>
<div class="agent index content">
    <?= $this->Html->link(__('New Agent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agent') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('matricule') ?></th>
                    <th><?= $this->Paginator->sort('prenom') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('datenaissance') ?></th>
                    <th><?= $this->Paginator->sort('dateengagement') ?></th>
                    <th><?= $this->Paginator->sort('genre') ?></th>
                    <th><?= $this->Paginator->sort('fonction') ?></th>
                    <th><?= $this->Paginator->sort('equipe') ?></th>
                    <th><?= $this->Paginator->sort('reportto') ?></th>
                    <th><?= $this->Paginator->sort('telephone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agent as $agent): ?>
                <tr>
                    <td><?= $this->Number->format($agent->id) ?></td>
                    <td><?= h($agent->matricule) ?></td>
                    <td><?= h($agent->prenom) ?></td>
                    <td><?= h($agent->nom) ?></td>
                    <td><?= h($agent->datenaissance) ?></td>
                    <td><?= h($agent->dateengagement) ?></td>
                    <td><?= h($agent->genre) ?></td>
                    <td><?= h($agent->fonction) ?></td>
                    <td><?= h($agent->equipe) ?></td>
                    <td><?= h($agent->reportto) ?></td>
                    <td><?= h($agent->telephone) ?></td>
                    <td><?= h($agent->email) ?></td>
                    <td><?= h($agent->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]) ?>
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