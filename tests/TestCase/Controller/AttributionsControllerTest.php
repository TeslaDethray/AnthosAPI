<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AttributionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AttributionsController Test Case
 */
class AttributionsControllerTest extends IntegrationTestCase
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
        'app.bouquets_tags',
        'app.tags',
        'app.definitions',
        'app.definitions_tags',
        'app.plants_tags',
        'app.sources'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
