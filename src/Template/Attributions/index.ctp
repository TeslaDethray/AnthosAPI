<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attribution'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Definitions'), ['controller' => 'Definitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Definition'), ['controller' => 'Definitions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attributions index large-9 medium-8 columns content">
    <h3><?= __('Attributions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('plant_id') ?></th>
                <th><?= $this->Paginator->sort('definition_id') ?></th>
                <th><?= $this->Paginator->sort('source_id') ?></th>
                <th><?= $this->Paginator->sort('created_at') ?></th>
                <th><?= $this->Paginator->sort('updated_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attributions as $attribution): ?>
            <tr>
                <td><?= $this->Number->format($attribution->id) ?></td>
                <td><?= $attribution->has('plant') ? $this->Html->link($attribution->plant->common_name, ['controller' => 'Plants', 'action' => 'view', $attribution->plant->id]) : '' ?></td>
                <td>
                    <?= $attribution->has('definition') ? $this->Html->link($attribution->definition->definition, ['controller' => 'Definitions', 'action' => 'view', $attribution->definition->id]) : '' ?>
                    <?= $attribution->definition->has('subdefinition') ? $this->Html->link('- ' . $attribution->definition->subdefinition, ['controller' => 'Definitions', 'action' => 'view', $attribution->definition->id]) : '' ?>
                </td>
                <td><?= $attribution->has('source') ? $this->Html->link($attribution->source->name, ['controller' => 'Sources', 'action' => 'view', $attribution->source->id]) : '' ?></td>
                <td><?= h($attribution->created_at) ?></td>
                <td><?= h($attribution->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attribution->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attribution->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attribution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attribution->id)]) ?>
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
