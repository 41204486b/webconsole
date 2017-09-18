<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NetworkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NetworkTable Test Case
 */
class NetworkTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NetworkTable
     */
    public $Network;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.network'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Network') ? [] : ['className' => NetworkTable::class];
        $this->Network = TableRegistry::get('Network', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Network);

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
}
