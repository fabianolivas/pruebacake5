<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\EmpresasController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EmpresasController Test Case
 *
 * @uses \App\Controller\EmpresasController
 */
class EmpresasControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
        'app.EmpresasOpcionesrecargas',
        'app.IdentificadorcobrosEmpresas',
        'app.MediopagosEmpresas',
        'app.RecaudadorasEmpresas',
        'app.ServiciosEmpresas',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\EmpresasController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\EmpresasController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\EmpresasController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\EmpresasController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\EmpresasController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
