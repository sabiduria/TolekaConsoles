<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$number = 1;
?>
<div class="row">
    <!--aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside-->
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->prenom.' '.$user->nom) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
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
            </table>
            <div class="related">
                <h4><?= __('Related Affectations') ?></h4>
                <?php if (!empty($user->affectations)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('#') ?></th>
                            <th><?= __('Batch Id') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->affectations as $affectation) : ?>
                        <tr>
                            <td><?= $number++ ?></td>
                            <td><?= h($affectation->batch_id) ?></td>
                            <td><?= h($affectation->state) ?></td>
                            <td><?= h($affectation->created) ?></td>
                            <td><?= h($affectation->modified) ?></td>
                            <td><?= h($affectation->createdby) ?></td>
                            <td><?= h($affectation->modifiedby) ?></td>
                            <td><?= h($affectation->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Affectations', 'action' => 'view', $affectation->id], ['class'=>'btn btn-success btn-sm']) ?>
                                <!--?= $this->Html->link(__('Edit'), ['controller' => 'Affectations', 'action' => 'edit', $affectation->id]) ?-->
                                <!--?= $this->Form->postLink(__('Delete'), ['controller' => 'Affectations', 'action' => 'delete', $affectation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affectation->id)]) ?-->
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
