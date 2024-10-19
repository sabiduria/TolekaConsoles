<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cohbag> $cohbags
 */
$number = 1;
?>
<div class="cohbags index content">
    <h3><?= __('Cohbags') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('#') ?></th>
                    <th><?= $this->Paginator->sort('bagid') ?></th>
                    <th><?= $this->Paginator->sort('composite') ?></th>
                    <th><?= $this->Paginator->sort('dateprod') ?></th>
                    <th><?= $this->Paginator->sort('poids') ?></th>
                    <th><?= $this->Paginator->sort('localisation') ?></th>
                    <th><?= $this->Paginator->sort('charge') ?></th>
                    <th><?= $this->Paginator->sort('spec') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cohbags as $cohbag): ?>
                <tr>
                    <td><?= $number++ ?></td>
                    <td><?= h($cohbag->bagid) ?></td>
                    <td><?= h($cohbag->composite) ?></td>
                    <td><?= h($cohbag->dateprod) ?></td>
                    <td><?= $this->Number->format($cohbag->poids) ?></td>
                    <td><?= h($cohbag->localisation) ?></td>
                    <td><?= h($cohbag->charge) ?></td>
                    <td><?= h($cohbag->spec) ?></td>
                    <td><?= h($cohbag->lotnumber) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cohbag->id], ['class'=>'btn btn-success btn-sm']) ?>
                        <!--?= $this->Html->link(__('Edit'), ['action' => 'edit', $cohbag->id]) ?-->
                        <!--?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cohbag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cohbag->id)]) ?-->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
