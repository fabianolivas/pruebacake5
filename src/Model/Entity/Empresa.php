<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property int $categoriaempresa_id
 * @property string $nombre
 * @property string|null $funcion
 * @property int|null $pago_parcial
 * @property int|null $pago_abono
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $contacto_nombre
 * @property string|null $contacto_fono
 * @property bool|null $opcion_numero_recibo
 * @property bool|null $opcion_observacion
 * @property bool|null $opcion_numero_cliente
 * @property string|null $impresion_layout
 * @property bool|null $recarga_fija
 * @property bool|null $opcion_cedula
 * @property bool|null $activo
 * @property string|null $email
 * @property int|null $visa_id
 * @property string|null $imagen
 *
 * @property \App\Model\Entity\Categoriaempresa $categoriaempresa
 * @property \App\Model\Entity\CargoPorServicio[] $cargo_por_servicios
 * @property \App\Model\Entity\Cedula[] $cedulas
 * @property \App\Model\Entity\Cedulasciti[] $cedulascitis
 * @property \App\Model\Entity\Cobro[] $cobros
 * @property \App\Model\Entity\ComisionesEmpresa[] $comisiones_empresas
 * @property \App\Model\Entity\ComisionesRecaudadora[] $comisiones_recaudadoras
 * @property \App\Model\Entity\Contadore[] $contadores
 * @property \App\Model\Entity\Cuenta[] $cuentas
 * @property \App\Model\Entity\Empleado[] $empleados
 * @property \App\Model\Entity\Historicocobro[] $historicocobros
 * @property \App\Model\Entity\Intranetranking[] $intranetrankings
 * @property \App\Model\Entity\LogWsExt[] $log_ws_ext
 * @property \App\Model\Entity\Oficina[] $oficinas
 * @property \App\Model\Entity\Pago[] $pagos
 * @property \App\Model\Entity\Pagosbk[] $pagosbk
 * @property \App\Model\Entity\Promocione[] $promociones
 * @property \App\Model\Entity\QueueConfiguration[] $queue_configurations
 * @property \App\Model\Entity\Recarga[] $recargas
 * @property \App\Model\Entity\Seguro[] $seguros
 * @property \App\Model\Entity\Opcionesrecarga[] $opcionesrecargas
 * @property \App\Model\Entity\Identificadorcobro[] $identificadorcobros
 * @property \App\Model\Entity\Mediopago[] $mediopagos
 * @property \App\Model\Entity\Recaudadora[] $recaudadoras
 * @property \App\Model\Entity\Servicio[] $servicios
 */
class Empresa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'categoriaempresa_id' => true,
        'nombre' => true,
        'funcion' => true,
        'pago_parcial' => true,
        'pago_abono' => true,
        'created' => true,
        'modified' => true,
        'contacto_nombre' => true,
        'contacto_fono' => true,
        'opcion_numero_recibo' => true,
        'opcion_observacion' => true,
        'opcion_numero_cliente' => true,
        'impresion_layout' => true,
        'recarga_fija' => true,
        'opcion_cedula' => true,
        'activo' => true,
        'email' => true,
        'visa_id' => true,
        'imagen' => true,
        'categoriaempresa' => true,
        'cargo_por_servicios' => true,
        'cedulas' => true,
        'cedulascitis' => true,
        'cobros' => true,
        'comisiones_empresas' => true,
        'comisiones_recaudadoras' => true,
        'contadores' => true,
        'cuentas' => true,
        'empleados' => true,
        'historicocobros' => true,
        'intranetrankings' => true,
        'log_ws_ext' => true,
        'oficinas' => true,
        'pagos' => true,
        'pagosbk' => true,
        'promociones' => true,
        'queue_configurations' => true,
        'recargas' => true,
        'seguros' => true,
        'opcionesrecargas' => true,
        'identificadorcobros' => true,
        'mediopagos' => true,
        'recaudadoras' => true,
        'servicios' => true,
    ];
}
