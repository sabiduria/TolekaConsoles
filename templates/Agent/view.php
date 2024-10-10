<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agent'), ['action' => 'edit', $agent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agent'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agent view content">
            <h3><?= h($agent->matricule) ?></h3>
            <table>
                <tr>
                    <th><?= __('Matricule') ?></th>
                    <td><?= h($agent->matricule) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($agent->prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($agent->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre') ?></th>
                    <td><?= h($agent->genre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fonction') ?></th>
                    <td><?= h($agent->fonction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Equipe') ?></th>
                    <td><?= h($agent->equipe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reportto') ?></th>
                    <td><?= h($agent->reportto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= h($agent->telephone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($agent->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($agent->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datenaissance') ?></th>
                    <td><?= h($agent->datenaissance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateengagement') ?></th>
                    <td><?= h($agent->dateengagement) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>