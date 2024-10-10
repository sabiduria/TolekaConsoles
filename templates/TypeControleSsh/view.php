<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeControleSsh $typeControleSsh
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Type Controle Ssh'), ['action' => 'edit', $typeControleSsh->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Type Controle Ssh'), ['action' => 'delete', $typeControleSsh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeControleSsh->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Type Controle Ssh'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Type Controle Ssh'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="typeControleSsh view content">
            <h3><?= h($typeControleSsh->controle) ?></h3>
            <table>
                <tr>
                    <th><?= __('Controle') ?></th>
                    <td><?= h($typeControleSsh->controle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typeControleSsh->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>