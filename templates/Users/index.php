<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idrole') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('avatar') ?></th>
                    <th><?= $this->Paginator->sort('prenom') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('telephone') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th><?= $this->Paginator->sort('dateinscription') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th><?= $this->Paginator->sort('sexe') ?></th>
                    <th><?= $this->Paginator->sort('codeuser') ?></th>
                    <th><?= $this->Paginator->sort('rolead1') ?></th>
                    <th><?= $this->Paginator->sort('rolead2') ?></th>
                    <th><?= $this->Paginator->sort('rolead3') ?></th>
                    <th><?= $this->Paginator->sort('section') ?></th>
                    <th><?= $this->Paginator->sort('langue') ?></th>
                    <th><?= $this->Paginator->sort('synced') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= $this->Number->format($user->idrole) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->avatar) ?></td>
                    <td><?= h($user->prenom) ?></td>
                    <td><?= h($user->nom) ?></td>
                    <td><?= h($user->telephone) ?></td>
                    <td><?= h($user->statut) ?></td>
                    <td><?= h($user->dateinscription) ?></td>
                    <td><?= $this->Number->format($user->iduser) ?></td>
                    <td><?= h($user->datemiseajour) ?></td>
                    <td><?= h($user->sexe) ?></td>
                    <td><?= h($user->codeuser) ?></td>
                    <td><?= $this->Number->format($user->rolead1) ?></td>
                    <td><?= $this->Number->format($user->rolead2) ?></td>
                    <td><?= $this->Number->format($user->rolead3) ?></td>
                    <td><?= $this->Number->format($user->section) ?></td>
                    <td><?= h($user->langue) ?></td>
                    <td><?= h($user->synced) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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