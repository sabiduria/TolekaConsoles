<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tach $tach
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tach'), ['action' => 'edit', $tach->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tach'), ['action' => 'delete', $tach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tach->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Taches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tach'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="taches view content">
            <h3><?= h($tach->statut) ?></h3>
            <table>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($tach->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentaireexec') ?></th>
                    <td><?= h($tach->commentaireexec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conclusion') ?></th>
                    <td><?= h($tach->conclusion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tach->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idpj') ?></th>
                    <td><?= $this->Number->format($tach->idpj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assignea') ?></th>
                    <td><?= $this->Number->format($tach->assignea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($tach->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser2') ?></th>
                    <td><?= $this->Number->format($tach->iduser2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Depenseusd') ?></th>
                    <td><?= $this->Number->format($tach->depenseusd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Revenus') ?></th>
                    <td><?= $this->Number->format($tach->revenus) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gainusd') ?></th>
                    <td><?= $this->Number->format($tach->gainusd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($tach->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datelimite') ?></th>
                    <td><?= h($tach->datelimite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($tach->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($tach->datemiseajour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datecomexec') ?></th>
                    <td><?= h($tach->datecomexec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateconcl') ?></th>
                    <td><?= h($tach->dateconcl) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tach->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>