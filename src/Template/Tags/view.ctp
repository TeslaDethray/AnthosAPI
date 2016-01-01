<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bouquets'), ['controller' => 'Bouquets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bouquet'), ['controller' => 'Bouquets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Definitions'), ['controller' => 'Definitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Definition'), ['controller' => 'Definitions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plants'), ['controller' => 'Plants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plant'), ['controller' => 'Plants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tag') ?></th>
            <td><?= h($tag->tag) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($tag->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($tag->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bouquets') ?></h4>
        <?php if (!empty($tag->bouquets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->bouquets as $bouquets): ?>
            <tr>
                <td><?= h($bouquets->id) ?></td>
                <td><?= h($bouquets->created_at) ?></td>
                <td><?= h($bouquets->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bouquets', 'action' => 'view', $bouquets->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bouquets', 'action' => 'edit', $bouquets->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bouquets', 'action' => 'delete', $bouquets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bouquets->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Definitions') ?></h4>
        <?php if (!empty($tag->definitions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Definition') ?></th>
                <th><?= __('Subdefinition') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->definitions as $definitions): ?>
            <tr>
                <td><?= h($definitions->id) ?></td>
                <td><?= h($definitions->definition) ?></td>
                <td><?= h($definitions->subdefinition) ?></td>
                <td><?= h($definitions->created_at) ?></td>
                <td><?= h($definitions->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Definitions', 'action' => 'view', $definitions->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Definitions', 'action' => 'edit', $definitions->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Definitions', 'action' => 'delete', $definitions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $definitions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Plants') ?></h4>
        <?php if (!empty($tag->plants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Common Name') ?></th>
                <th><?= __('Color') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Variety') ?></th>
                <th><?= __('Seasonality') ?></th>
                <th><?= __('Vase Life') ?></th>
                <th><?= __('Difficulty') ?></th>
                <th><?= __('Notes') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Scientific Name Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->plants as $plants): ?>
            <tr>
                <td><?= h($plants->id) ?></td>
                <td><?= h($plants->common_name) ?></td>
                <td><?= h($plants->color) ?></td>
                <td><?= h($plants->type) ?></td>
                <td><?= h($plants->variety) ?></td>
                <td><?= h($plants->seasonality) ?></td>
                <td><?= h($plants->vase_life) ?></td>
                <td><?= h($plants->difficulty) ?></td>
                <td><?= h($plants->notes) ?></td>
                <td><?= h($plants->created_at) ?></td>
                <td><?= h($plants->updated_at) ?></td>
                <td><?= h($plants->scientific_name_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Plants', 'action' => 'view', $plants->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Plants', 'action' => 'edit', $plants->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Plants', 'action' => 'delete', $plants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plants->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
