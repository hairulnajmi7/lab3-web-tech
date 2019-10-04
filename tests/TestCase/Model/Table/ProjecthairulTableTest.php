<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjecthairulTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjecthairulTable Test Case
 */
class ProjecthairulTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjecthairulTable
     */
    public $Projecthairul;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Projecthairul'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projecthairul') ? [] : ['className' => ProjecthairulTable::class];
        $this->Projecthairul = TableRegistry::getTableLocator()->get('Projecthairul', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projecthairul);

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
