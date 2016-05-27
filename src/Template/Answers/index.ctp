<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answers index large-9 medium-8 columns content">
    <h3><?= __('Answers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('word_id') ?></th>
                <th><?= $this->Paginator->sort('answer') ?></th>
                <th><?= $this->Paginator->sort('is_correct') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($answers as $answer): ?>
            <tr>
                <td><?= $this->Number->format($answer->id) ?></td>
                <td><?= $answer->has('word') ? $this->Html->link($answer->word->name, ['controller' => 'Words', 'action' => 'view', $answer->word->id]) : '' ?></td>
                <td><?= h($answer->answer) ?></td>
                <td><?= $this->Number->format($answer->is_correct) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $answer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $answer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id)]) ?>
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
