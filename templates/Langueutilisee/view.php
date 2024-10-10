<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Langueutilisee $langueutilisee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Langueutilisee'), ['action' => 'edit', $langueutilisee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Langueutilisee'), ['action' => 'delete', $langueutilisee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $langueutilisee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Langueutilisee'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Langueutilisee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="langueutilisee view content">
            <h3><?= h($langueutilisee->langue) ?></h3>
            <table>
                <tr>
                    <th><?= __('Langue') ?></th>
                    <td><?= h($langueutilisee->langue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($langueutilisee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($langueutilisee->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($langueutilisee->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>