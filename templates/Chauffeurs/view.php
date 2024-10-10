<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chauffeur $chauffeur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chauffeur'), ['action' => 'edit', $chauffeur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chauffeur'), ['action' => 'delete', $chauffeur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chauffeur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chauffeurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chauffeur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="chauffeurs view content">
            <h3><?= h($chauffeur->prenomch) ?></h3>
            <table>
                <tr>
                    <th><?= __('Prenomch') ?></th>
                    <td><?= h($chauffeur->prenomch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomch') ?></th>
                    <td><?= h($chauffeur->nomch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telch') ?></th>
                    <td><?= h($chauffeur->telch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pays') ?></th>
                    <td><?= h($chauffeur->pays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passeportch') ?></th>
                    <td><?= h($chauffeur->passeportch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($chauffeur->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Camion') ?></th>
                    <td><?= h($chauffeur->camion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chauffeur->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($chauffeur->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($chauffeur->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datevisa') ?></th>
                    <td><?= h($chauffeur->datevisa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datepass') ?></th>
                    <td><?= h($chauffeur->datepass) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>