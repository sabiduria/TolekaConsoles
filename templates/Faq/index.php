<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Faq> $faq
 */
?>
<div class="faq index content">
    <?= $this->Html->link(__('New Faq'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Faq') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('question') ?></th>
                    <th><?= $this->Paginator->sort('questionfr') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('datemiseajour') ?></th>
                    <th><?= $this->Paginator->sort('iduser') ?></th>
                    <th><?= $this->Paginator->sort('idagent') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faq as $faq): ?>
                <tr>
                    <td><?= $this->Number->format($faq->id) ?></td>
                    <td><?= h($faq->question) ?></td>
                    <td><?= h($faq->questionfr) ?></td>
                    <td><?= h($faq->date) ?></td>
                    <td><?= h($faq->datemiseajour) ?></td>
                    <td><?= $this->Number->format($faq->iduser) ?></td>
                    <td><?= $this->Number->format($faq->idagent) ?></td>
                    <td><?= h($faq->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $faq->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faq->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]) ?>
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