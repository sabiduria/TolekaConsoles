<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatcivil $etatcivil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Etatcivil'), ['action' => 'edit', $etatcivil->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Etatcivil'), ['action' => 'delete', $etatcivil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatcivil->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Etatcivil'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Etatcivil'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="etatcivil view content">
            <h3><?= h($etatcivil->statutmarital) ?></h3>
            <table>
                <tr>
                    <th><?= __('Statutmarital') ?></th>
                    <td><?= h($etatcivil->statutmarital) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($etatcivil->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>