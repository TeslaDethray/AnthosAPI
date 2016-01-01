<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScientificNamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScientificNamesTable Test Case
 */
class ScientificNamesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.scientific_names',
        'app.plants',
        'app.attributions',
        'app.bouquets',
        'app.bouquets_plants',
        'app.tags',
        'app.plants_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ScientificNames') ? [] : ['className' => 'App\Model\Table\ScientificNamesTable'];
        $this->ScientificNames = TableRegistry::get('ScientificNames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ScientificNames);

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
