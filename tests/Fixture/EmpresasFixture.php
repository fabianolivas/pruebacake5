<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpresasFixture
 */
class EmpresasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'categoriaempresa_id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'funcion' => 'Lorem ipsum dolor sit amet',
                'pago_parcial' => 1,
                'pago_abono' => 1,
                'created' => 1724451129,
                'modified' => 1724451129,
                'contacto_nombre' => 'Lorem ipsum dolor sit amet',
                'contacto_fono' => 'Lorem ipsum dolor sit amet',
                'opcion_numero_recibo' => 1,
                'opcion_observacion' => 1,
                'opcion_numero_cliente' => 1,
                'impresion_layout' => 'Lorem ip',
                'recarga_fija' => 1,
                'opcion_cedula' => 1,
                'activo' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'visa_id' => 1,
                'imagen' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
