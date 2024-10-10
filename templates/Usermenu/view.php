<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usermenu $usermenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usermenu'), ['action' => 'edit', $usermenu->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usermenu'), ['action' => 'delete', $usermenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usermenu->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usermenu'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usermenu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usermenu view content">
            <h3><?= h($usermenu->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usermenu->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idmenu') ?></th>
                    <td><?= $this->Number->format($usermenu->idmenu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idrole') ?></th>
                    <td><?= $this->Number->format($usermenu->idrole) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iduser') ?></th>
                    <td><?= $this->Number->format($usermenu->iduser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($usermenu->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>