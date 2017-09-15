<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CameraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CameraTable Test Case
 */
class CameraTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CameraTable
     */
    public $Camera;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.camera'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Camera') ? [] : ['className' => CameraTable::class];
        $this->Camera = TableRegistry::get('Camera', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Camera);

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
