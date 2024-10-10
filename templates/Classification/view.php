<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classification $classification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Classification'), ['action' => 'edit', $classification->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Classification'), ['action' => 'delete', $classification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classification->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Classification'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Classification'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="classification view content">
            <h3><?= h($classification->classe) ?></h3>
            <table>
                <tr>
                    <th><?= __('Classe') ?></th>
                    <td><?= h($classification->classe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($classification->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($classification->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($classification->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemiseajour') ?></th>
                    <td><?= h($classification->datemiseajour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>