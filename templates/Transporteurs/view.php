<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transporteur $transporteur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transporteur'), ['action' => 'edit', $transporteur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transporteur'), ['action' => 'delete', $transporteur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transporteur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transporteurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transporteur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transporteurs view content">
            <h3><?= h($transporteur->nomtrans) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomtrans') ?></th>
                    <td><?= h($transporteur->nomtrans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailtrans') ?></th>
                    <td><?= h($transporteur->emailtrans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teltrans') ?></th>
                    <td><?= h($transporteur->teltrans) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pays') ?></th>
                    <td><?= h($transporteur->pays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($transporteur->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transporteur->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($transporteur->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($transporteur->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>