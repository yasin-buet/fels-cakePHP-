<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResultsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResultsTable Test Case
 */
class ResultsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResultsTable
     */
    public $Results;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.results',
        'app.lessons',
        'app.users',
        'app.activities',
        'app.categories',
        'app.words',
        'app.answers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Results') ? [] : ['className' => 'App\Model\Table\ResultsTable'];
        $this->Results = TableRegistry::get('Results', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Results);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
