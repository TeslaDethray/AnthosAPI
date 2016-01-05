<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attribution'), ['action' => 'edit', $attribution->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attribution'), ['action' => 'delete', $attribution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attribution->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attributions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribution'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Definitions'), ['controller' => 'Definitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Definition'), ['controller' => 'Definitions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attributions view large-9 medium-8 columns content">
    <h3><?= h($attribution->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Plant') ?></th>
            <td><?= $attribution->has('plant') ? $this->Html->link($attribution->plant->common_name, ['controller' => 'Plants', 'action' => 'view', $attribution->plant->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Definition') ?></th>
            <td><?= $attribution->has('definition') ? $this->Html->link($attribution->definition->id, ['controller' => 'Definitions', 'action' => 'view', $attribution->definition->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Source') ?></th>
            <td><?= $attribution->has('source') ? $this->Html->link($attribution->source->name, ['controller' => 'Sources', 'action' => 'view', $attribution->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($attribution->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($attribution->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($attribution->updated_at) ?></td>
        </tr>
    </table>
</div>
