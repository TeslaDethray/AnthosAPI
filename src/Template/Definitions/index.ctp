<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Definition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attributions'), ['controller' => 'Attributions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribution'), ['controller' => 'Attributions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="definitions index large-9 medium-8 columns content">
    <h3><?= __('Definitions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('created_at') ?></th>
                <th><?= $this->Paginator->sort('updated_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($definitions as $definition): ?>
            <tr>
                <td><?= $this->Number->format($definition->id) ?></td>
                <td><?= h($definition->created_at) ?></td>
                <td><?= h($definition->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $definition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $definition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $definition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $definition->id)]) ?>
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
