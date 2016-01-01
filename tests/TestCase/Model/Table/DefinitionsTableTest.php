<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DefinitionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DefinitionsTable Test Case
 */
class DefinitionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.definitions',
        'app.attributions',
        'app.tags',
        'app.bouquets',
        'app.bouquets_tags',
        'app.definitions_tags',
        'app.plants',
        'app.scientific_names',
        'app.bouquets_plants',
        'app.plants_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {

        parent::setUp();
        $config = TableRegistry::exists('Definitions') ? [] : ['className' => 'App\Model\Table\DefinitionsTable'];
        $this->Definitions = TableRegistry::get('Definitions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {

        unset($this->Definitions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize() {

        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault() {

        $this->markTestIncomplete('Not implemented yet.');
    }

}
