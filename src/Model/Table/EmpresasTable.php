<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\CategoriaempresasTable&\Cake\ORM\Association\BelongsTo $Categoriaempresas
 * @property \App\Model\Table\CargoPorServiciosTable&\Cake\ORM\Association\HasMany $CargoPorServicios
 * @property \App\Model\Table\CedulasTable&\Cake\ORM\Association\HasMany $Cedulas
 * @property \App\Model\Table\CedulascitisTable&\Cake\ORM\Association\HasMany $Cedulascitis
 * @property \App\Model\Table\CobrosTable&\Cake\ORM\Association\HasMany $Cobros
 * @property \App\Model\Table\ComisionesEmpresasTable&\Cake\ORM\Association\HasMany $ComisionesEmpresas
 * @property \App\Model\Table\ComisionesRecaudadorasTable&\Cake\ORM\Association\HasMany $ComisionesRecaudadoras
 * @property \App\Model\Table\ContadoresTable&\Cake\ORM\Association\HasMany $Contadores
 * @property \App\Model\Table\CuentasTable&\Cake\ORM\Association\HasMany $Cuentas
 * @property \App\Model\Table\EmpleadosTable&\Cake\ORM\Association\HasMany $Empleados
 * @property \App\Model\Table\HistoricocobrosTable&\Cake\ORM\Association\HasMany $Historicocobros
 * @property \App\Model\Table\IntranetrankingsTable&\Cake\ORM\Association\HasMany $Intranetrankings
 * @property \App\Model\Table\LogWsExtTable&\Cake\ORM\Association\HasMany $LogWsExt
 * @property \App\Model\Table\OficinasTable&\Cake\ORM\Association\HasMany $Oficinas
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\HasMany $Pagos
 * @property \App\Model\Table\PagosbkTable&\Cake\ORM\Association\HasMany $Pagosbk
 * @property \App\Model\Table\PromocionesTable&\Cake\ORM\Association\HasMany $Promociones
 * @property \App\Model\Table\QueueConfigurationsTable&\Cake\ORM\Association\HasMany $QueueConfigurations
 * @property \App\Model\Table\RecargasTable&\Cake\ORM\Association\HasMany $Recargas
 * @property \App\Model\Table\SegurosTable&\Cake\ORM\Association\HasMany $Seguros
 * @property \App\Model\Table\OpcionesrecargasTable&\Cake\ORM\Association\BelongsToMany $Opcionesrecargas
 * @property \App\Model\Table\IdentificadorcobrosTable&\Cake\ORM\Association\BelongsToMany $Identificadorcobros
 * @property \App\Model\Table\MediopagosTable&\Cake\ORM\Association\BelongsToMany $Mediopagos
 * @property \App\Model\Table\RecaudadorasTable&\Cake\ORM\Association\BelongsToMany $Recaudadoras
 * @property \App\Model\Table\ServiciosTable&\Cake\ORM\Association\BelongsToMany $Servicios
 *
 * @method \App\Model\Entity\Empresa newEmptyEntity()
 * @method \App\Model\Entity\Empresa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Empresa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Empresa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Empresa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Empresa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Empresa> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('empresas');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categoriaempresas', [
            'foreignKey' => 'categoriaempresa_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CargoPorServicios', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Cedulas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Cedulascitis', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Cobros', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('ComisionesEmpresas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('ComisionesRecaudadoras', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Contadores', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Cuentas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Empleados', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Historicocobros', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Intranetrankings', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('LogWsExt', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Oficinas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Pagos', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Pagosbk', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Promociones', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('QueueConfigurations', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Recargas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Seguros', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->belongsToMany('Opcionesrecargas', [
            'foreignKey' => 'empresa_id',
            'targetForeignKey' => 'opcionesrecarga_id',
            'joinTable' => 'empresas_opcionesrecargas',
        ]);
        $this->belongsToMany('Identificadorcobros', [
            'foreignKey' => 'empresa_id',
            'targetForeignKey' => 'identificadorcobro_id',
            'joinTable' => 'identificadorcobros_empresas',
        ]);
        $this->belongsToMany('Mediopagos', [
            'foreignKey' => 'empresa_id',
            'targetForeignKey' => 'mediopago_id',
            'joinTable' => 'mediopagos_empresas',
        ]);
        $this->belongsToMany('Recaudadoras', [
            'foreignKey' => 'empresa_id',
            'targetForeignKey' => 'recaudadora_id',
            'joinTable' => 'recaudadoras_empresas',
        ]);
        $this->belongsToMany('Servicios', [
            'foreignKey' => 'empresa_id',
            'targetForeignKey' => 'servicio_id',
            'joinTable' => 'servicios_empresas',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('categoriaempresa_id')
            ->notEmptyString('categoriaempresa_id');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 200)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('funcion')
            ->maxLength('funcion', 100)
            ->allowEmptyString('funcion');

        $validator
            ->allowEmptyString('pago_parcial');

        $validator
            ->allowEmptyString('pago_abono');

        $validator
            ->scalar('contacto_nombre')
            ->maxLength('contacto_nombre', 200)
            ->allowEmptyString('contacto_nombre');

        $validator
            ->scalar('contacto_fono')
            ->maxLength('contacto_fono', 100)
            ->allowEmptyString('contacto_fono');

        $validator
            ->boolean('opcion_numero_recibo')
            ->allowEmptyString('opcion_numero_recibo');

        $validator
            ->boolean('opcion_observacion')
            ->allowEmptyString('opcion_observacion');

        $validator
            ->boolean('opcion_numero_cliente')
            ->allowEmptyString('opcion_numero_cliente');

        $validator
            ->scalar('impresion_layout')
            ->maxLength('impresion_layout', 10)
            ->allowEmptyString('impresion_layout');

        $validator
            ->boolean('recarga_fija')
            ->allowEmptyString('recarga_fija');

        $validator
            ->boolean('opcion_cedula')
            ->allowEmptyString('opcion_cedula');

        $validator
            ->boolean('activo')
            ->allowEmptyString('activo');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('visa_id')
            ->allowEmptyString('visa_id');

        $validator
            ->scalar('imagen')
            ->maxLength('imagen', 250)
            ->allowEmptyString('imagen');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['categoriaempresa_id'], 'Categoriaempresas'), ['errorField' => 'categoriaempresa_id']);

        return $rules;
    }
}
