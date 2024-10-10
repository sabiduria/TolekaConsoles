<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentadm $documentadm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Documentadm'), ['action' => 'edit', $documentadm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Documentadm'), ['action' => 'delete', $documentadm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentadm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Documentadm'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Documentadm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="documentadm view content">
            <h3><?= h($documentadm->type) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($documentadm->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($documentadm->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($documentadm->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($documentadm->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>