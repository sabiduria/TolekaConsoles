<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cubundle> $cubundle
 */
$number = 1;
?>
<div class="cubundle index content">
    <h3><?= __('Cubundle') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('#') ?></th>
                    <th><?= $this->Paginator->sort('dateprod') ?></th>
                    <th><?= $this->Paginator->sort('unit') ?></th>
                    <th><?= $this->Paginator->sort('lotnumber') ?></th>
                    <th><?= $this->Paginator->sort('imexlot') ?></th>
                    <th><?= $this->Paginator->sort('bundlecode') ?></th>
                    <th><?= $this->Paginator->sort('composite') ?></th>
                    <th><?= $this->Paginator->sort('netweight') ?></th>
                    <th><?= $this->Paginator->sort('visualgrade') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('charge') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cubundle as $cubundle): ?>
                <tr>
                    <td><?= $number++ ?></td>
                    <td><?= h($cubundle->dateprod) ?></td>
                    <td><?= h($cubundle->unit) ?></td>
                    <td><?= h($cubundle->lotnumber) ?></td>
                    <td><?= h($cubundle->imexlot) ?></td>
                    <td><?= h($cubundle->bundlecode) ?></td>
                    <td><?= h($cubundle->composite) ?></td>
                    <td><?= $this->Number->format($cubundle->netweight) ?></td>
                    <td><?= h($cubundle->visualgrade) ?></td>
                    <td><?= h($cubundle->location) ?></td>
                    <td><?= h($cubundle->charge) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cubundle->id], ['class'=>'btn btn-success btn-sm']) ?>
                        <!--?= $this->Html->link(__('Edit'), ['action' => 'edit', $cubundle->id]) ?-->
                        <!--?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cubundle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cubundle->id)]) ?-->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
