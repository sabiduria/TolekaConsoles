<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->nom) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar') ?></th>
                    <td><?= h($user->avatar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($user->prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($user->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= h($user->telephone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($user->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexe') ?></th>
                    <td><?= h($user->sexe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codeuser') ?></th>
                    <td><?= h($user->codeuser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Langue') ?></th>
                    <td><?= h($user->langue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idrole') ?></th>
                    <td><?= $this->Number->format($user->idrole) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($user->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolead1') ?></th>
                    <td><?= $this->Number->format($user->rolead1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolead2') ?></th>
                    <td><?= $this->Number->format($user->rolead2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolead3') ?></th>
                    <td><?= $this->Number->format($user->rolead3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Section') ?></th>
                    <td><?= $this->Number->format($user->section) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateinscription') ?></th>
                    <td><?= h($user->dateinscription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($user->datemiseajour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Synced') ?></th>
                    <td><?= $user->synced ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Affectations') ?></h4>
                <?php if (!empty($user->affectations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Batch Id') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Synced') ?></th>
                            <th><?= __('Isactive') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->affectations as $affectation) : ?>
                        <tr>
                            <td><?= h($affectation->id) ?></td>
                            <td><?= h($affectation->user_id) ?></td>
                            <td><?= h($affectation->batch_id) ?></td>
                            <td><?= h($affectation->state) ?></td>
                            <td><?= h($affectation->synced) ?></td>
                            <td><?= h($affectation->isactive) ?></td>
                            <td><?= h($affectation->created) ?></td>
                            <td><?= h($affectation->modified) ?></td>
                            <td><?= h($affectation->createdby) ?></td>
                            <td><?= h($affectation->modifiedby) ?></td>
                            <td><?= h($affectation->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Affectations', 'action' => 'view', $affectation->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Affectations', 'action' => 'edit', $affectation->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Affectations', 'action' => 'delete', $affectation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affectation->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>