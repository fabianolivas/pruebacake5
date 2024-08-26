<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresasTable Test Case
 */
class EmpresasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresasTable
     */
    protected $Empresas;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Empresas',
        'app.Categoriaempresas',
        'app.CargoPorServicios',
        'app.Cedulas',
        'app.Cedulascitis',
        'app.Cobros',
        'app.ComisionesEmpresas',
        'app.ComisionesRecaudadoras',
        'app.Contadores',
        'app.Cuentas',
        'app.Empleados',
        'app.Historicocobros',
        'app.Intranetrankings',
        'app.LogWsExt',
        'app.Oficinas',
        'app.Pagos',
        'app.Pagosbk',
        'app.Promociones',
        'app.QueueConfigurations',
        'app.Recargas',
        'app.Seguros',
        'app.Opcionesrecargas',
        'app.Identificadorcobros',
        'app.Mediopagos',
        'app.Recaudadoras',
        'app.Servicios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empresas') ? [] : ['className' => EmpresasTable::class];
        $this->Empresas = $this->getTableLocator()->get('Empresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Empresas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmpresasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EmpresasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
