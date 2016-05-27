<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answers view large-9 medium-8 columns content">
    <h3><?= h($answer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Word') ?></th>
            <td><?= $answer->has('word') ? $this->Html->link($answer->word->name, ['controller' => 'Words', 'action' => 'view', $answer->word->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Answer') ?></th>
            <td><?= h($answer->answer) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($answer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Correct') ?></th>
            <td><?= $this->Number->format($answer->is_correct) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Results') ?></h4>
        <?php if (!empty($answer->results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Lesson Id') ?></th>
                <th><?= __('Word Id') ?></th>
                <th><?= __('Answer Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($answer->results as $results): ?>
            <tr>
                <td><?= h($results->id) ?></td>
                <td><?= h($results->lesson_id) ?></td>
                <td><?= h($results->word_id) ?></td>
                <td><?= h($results->answer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Results', 'action' => 'view', $results->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Results', 'action' => 'edit', $results->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Results', 'action' => 'delete', $results->id], ['confirm' => __('Are you sure you want to delete # {0}?', $results->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
