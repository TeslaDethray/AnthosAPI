<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plant'), ['action' => 'edit', $plant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plant'), ['action' => 'delete', $plant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Plants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributions'), ['controller' => 'Attributions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribution'), ['controller' => 'Attributions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bouquets'), ['controller' => 'Bouquets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bouquet'), ['controller' => 'Bouquets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plants view large-9 medium-8 columns content">
    <h3><?= h($plant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Common Name') ?></th>
            <td><?= h($plant->common_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($plant->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($plant->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Variety') ?></th>
            <td><?= h($plant->variety) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($plant->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Seasonality') ?></th>
            <td><?= $this->Number->format($plant->seasonality) ?></td>
        </tr>
        <tr>
            <th><?= __('Vase Life') ?></th>
            <td><?= $this->Number->format($plant->vase_life) ?></td>
        </tr>
        <tr>
            <th><?= __('Difficulty') ?></th>
            <td><?= $this->Number->format($plant->difficulty) ?></td>
        </tr>
        <tr>
            <th><?= __('Scientific Name Id') ?></th>
            <td><?= $this->Number->format($plant->scientific_name_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($plant->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($plant->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($plant->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Attributions') ?></h4>
        <?php if (!empty($plant->attributions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Plant Id') ?></th>
                <th><?= __('Definition Id') ?></th>
                <th><?= __('Source Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plant->attributions as $attributions): ?>
            <tr>
                <td><?= h($attributions->id) ?></td>
                <td><?= h($attributions->plant_id) ?></td>
                <td><?= h($attributions->definition_id) ?></td>
                <td><?= h($attributions->source_id) ?></td>
                <td><?= h($attributions->created_at) ?></td>
                <td><?= h($attributions->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attributions', 'action' => 'view', $attributions->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attributions', 'action' => 'edit', $attributions->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attributions', 'action' => 'delete', $attributions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bouquets') ?></h4>
        <?php if (!empty($plant->bouquets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plant->bouquets as $bouquets): ?>
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
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($plant->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tag') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plant->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->tag) ?></td>
                <td><?= h($tags->created_at) ?></td>
                <td><?= h($tags->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
