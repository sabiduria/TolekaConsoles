<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fonction $fonction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fonction'), ['action' => 'edit', $fonction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fonction'), ['action' => 'delete', $fonction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fonction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fonctions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fonction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="fonctions view content">
            <h3><?= h($fonction->fonction) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fonction') ?></th>
                    <td><?= h($fonction->fonction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fonction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($fonction->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($fonction->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>