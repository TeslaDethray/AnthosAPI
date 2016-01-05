<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttributionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttributionsTable Test Case
 */
class AttributionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attributions',
        'app.plants',
        'app.scientific_names',
        'app.bouquets',
        'app.bouquets_plants',
        'app.tags',
        'app.bouquets_tags',
        'app.definitions',
        'app.definitions_tags',
        'app.plants_tags',
        'app.sources'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Attributions') ? [] : ['className' => 'App\Model\Table\AttributionsTable'];
        $this->Attributions = TableRegistry::get('Attributions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Attributions);

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
