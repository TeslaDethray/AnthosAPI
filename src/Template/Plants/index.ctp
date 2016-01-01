<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Plant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attributions'), ['controller' => 'Attributions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribution'), ['controller' => 'Attributions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bouquets'), ['controller' => 'Bouquets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bouquet'), ['controller' => 'Bouquets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plants index large-9 medium-8 columns content">
    <h3><?= __('Plants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('common_name') ?></th>
                <th><?= $this->Paginator->sort('color') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('variety') ?></th>
                <th><?= $this->Paginator->sort('seasonality') ?></th>
                <th><?= $this->Paginator->sort('vase_life') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($plants as $plant): ?>
            <tr>
                <td><?= $this->Number->format($plant->id) ?></td>
                <td><?= h($plant->common_name) ?></td>
                <td><?= h($plant->color) ?></td>
                <td><?= h($plant->type) ?></td>
                <td><?= h($plant->variety) ?></td>
                <td><?= $this->Number->format($plant->seasonality) ?></td>
                <td><?= $this->Number->format($plant->vase_life) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $plant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $plant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $plant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plant->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
