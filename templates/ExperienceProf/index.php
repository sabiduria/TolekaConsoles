<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ExperienceProf> $experienceProf
 */
?>
<div class="experienceProf index content">
    <?= $this->Html->link(__('New Experience Prof'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Experience Prof') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('periode') ?></th>
                    <th><?= $this->Paginator->sort('entreprise') ?></th>
                    <th><?= $this->Paginator->sort('fonction') ?></th>
                    <th><?= $this->Paginator->sort('ville') ?></th>
                    <th><?= $this->Paginator->sort('raison') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($experienceProf as $experienceProf): ?>
                <tr>
                    <td><?= $this->Number->format($experienceProf->id) ?></td>
                    <td><?= $this->Number->format($experienceProf->iduser) ?></td>
                    <td><?= h($experienceProf->periode) ?></td>
                    <td><?= h($experienceProf->entreprise) ?></td>
                    <td><?= h($experienceProf->fonction) ?></td>
                    <td><?= h($experienceProf->ville) ?></td>
                    <td><?= h($experienceProf->raison) ?></td>
                    <td><?= h($experienceProf->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $experienceProf->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experienceProf->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experienceProf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experienceProf->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>