<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResultsFixture
 *
 */
class ResultsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'lesson_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'word_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'answer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'lesson_id' => ['type' => 'index', 'columns' => ['lesson_id'], 'length' => []],
            'word_id' => ['type' => 'index', 'columns' => ['word_id'], 'length' => []],
            'answer_id' => ['type' => 'index', 'columns' => ['answer_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'results_ibfk_1' => ['type' => 'foreign', 'columns' => ['lesson_id'], 'references' => ['lessons', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'results_ibfk_2' => ['type' => 'foreign', 'columns' => ['word_id'], 'references' => ['words', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'results_ibfk_3' => ['type' => 'foreign', 'columns' => ['answer_id'], 'references' => ['answers', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'lesson_id' => 1,
            'word_id' => 1,
            'answer_id' => 1
        ],
    ];
}
