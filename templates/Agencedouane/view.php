<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agencedouane $agencedouane
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agencedouane'), ['action' => 'edit', $agencedouane->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agencedouane'), ['action' => 'delete', $agencedouane->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agencedouane->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agencedouane'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agencedouane'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agencedouane view content">
            <h3><?= h($agencedouane->nomagence) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomagence') ?></th>
                    <td><?= h($agencedouane->nomagence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= h($agencedouane->responsable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telresp') ?></th>
                    <td><?= h($agencedouane->telresp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailresp') ?></th>
                    <td><?= h($agencedouane->emailresp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agentsite') ?></th>
                    <td><?= h($agencedouane->agentsite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telagent') ?></th>
                    <td><?= h($agencedouane->telagent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailagent') ?></th>
                    <td><?= h($agencedouane->emailagent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pays') ?></th>
                    <td><?= h($agencedouane->pays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($agencedouane->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agencedouane->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($agencedouane->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($agencedouane->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Adresse') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($agencedouane->adresse)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>