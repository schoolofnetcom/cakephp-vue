<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertiesTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertiesTypesTable Test Case
 */
class PropertiesTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertiesTypesTable
     */
    public $PropertiesTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.properties_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PropertiesTypes') ? [] : ['className' => 'App\Model\Table\PropertiesTypesTable'];
        $this->PropertiesTypes = TableRegistry::get('PropertiesTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PropertiesTypes);

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
