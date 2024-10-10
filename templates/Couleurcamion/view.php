<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Couleurcamion $couleurcamion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Couleurcamion'), ['action' => 'edit', $couleurcamion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Couleurcamion'), ['action' => 'delete', $couleurcamion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couleurcamion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Couleurcamion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Couleurcamion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="couleurcamion view content">
            <h3><?= h($couleurcamion->couleur) ?></h3>
            <table>
                <tr>
                    <th><?= __('Couleur') ?></th>
                    <td><?= h($couleurcamion->couleur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($couleurcamion->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>