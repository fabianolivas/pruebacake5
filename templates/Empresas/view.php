<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empresa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresas view content">
            <h3><?= h($empresa->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Categoriaempresa') ?></th>
                    <td><?= $empresa->hasValue('categoriaempresa') ? $this->Html->link($empresa->categoriaempresa->nombre, ['controller' => 'Categoriaempresas', 'action' => 'view', $empresa->categoriaempresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($empresa->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcion') ?></th>
                    <td><?= h($empresa->funcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto Nombre') ?></th>
                    <td><?= h($empresa->contacto_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto Fono') ?></th>
                    <td><?= h($empresa->contacto_fono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impresion Layout') ?></th>
                    <td><?= h($empresa->impresion_layout) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($empresa->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagen') ?></th>
                    <td><?= h($empresa->imagen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pago Parcial') ?></th>
                    <td><?= $empresa->pago_parcial === null ? '' : $this->Number->format($empresa->pago_parcial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pago Abono') ?></th>
                    <td><?= $empresa->pago_abono === null ? '' : $this->Number->format($empresa->pago_abono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Visa Id') ?></th>
                    <td><?= $empresa->visa_id === null ? '' : $this->Number->format($empresa->visa_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($empresa->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($empresa->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Opcion Numero Recibo') ?></th>
                    <td><?= $empresa->opcion_numero_recibo ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Opcion Observacion') ?></th>
                    <td><?= $empresa->opcion_observacion ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Opcion Numero Cliente') ?></th>
                    <td><?= $empresa->opcion_numero_cliente ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Recarga Fija') ?></th>
                    <td><?= $empresa->recarga_fija ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Opcion Cedula') ?></th>
                    <td><?= $empresa->opcion_cedula ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $empresa->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Opcionesrecargas') ?></h4>
                <?php if (!empty($empresa->opcionesrecargas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Orden') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->opcionesrecargas as $opcionesrecarga) : ?>
                        <tr>
                            <td><?= h($opcionesrecarga->id) ?></td>
                            <td><?= h($opcionesrecarga->monto) ?></td>
                            <td><?= h($opcionesrecarga->orden) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Opcionesrecargas', 'action' => 'view', $opcionesrecarga->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Opcionesrecargas', 'action' => 'edit', $opcionesrecarga->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Opcionesrecargas', 'action' => 'delete', $opcionesrecarga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opcionesrecarga->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Identificadorcobros') ?></h4>
                <?php if (!empty($empresa->identificadorcobros)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->identificadorcobros as $identificadorcobro) : ?>
                        <tr>
                            <td><?= h($identificadorcobro->id) ?></td>
                            <td><?= h($identificadorcobro->nombre) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Identificadorcobros', 'action' => 'view', $identificadorcobro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Identificadorcobros', 'action' => 'edit', $identificadorcobro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Identificadorcobros', 'action' => 'delete', $identificadorcobro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $identificadorcobro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Mediopagos') ?></h4>
                <?php if (!empty($empresa->mediopagos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tipopago Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Payment Code') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->mediopagos as $mediopago) : ?>
                        <tr>
                            <td><?= h($mediopago->id) ?></td>
                            <td><?= h($mediopago->tipopago_id) ?></td>
                            <td><?= h($mediopago->nombre) ?></td>
                            <td><?= h($mediopago->payment_code) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Mediopagos', 'action' => 'view', $mediopago->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Mediopagos', 'action' => 'edit', $mediopago->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mediopagos', 'action' => 'delete', $mediopago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mediopago->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Recaudadoras') ?></h4>
                <?php if (!empty($empresa->recaudadoras)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Fono Contacto') ?></th>
                            <th><?= __('Nombre Contacto') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Dominio') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->recaudadoras as $recaudadora) : ?>
                        <tr>
                            <td><?= h($recaudadora->id) ?></td>
                            <td><?= h($recaudadora->nombre) ?></td>
                            <td><?= h($recaudadora->fono_contacto) ?></td>
                            <td><?= h($recaudadora->nombre_contacto) ?></td>
                            <td><?= h($recaudadora->created) ?></td>
                            <td><?= h($recaudadora->modified) ?></td>
                            <td><?= h($recaudadora->numero) ?></td>
                            <td><?= h($recaudadora->dominio) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Recaudadoras', 'action' => 'view', $recaudadora->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Recaudadoras', 'action' => 'edit', $recaudadora->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recaudadoras', 'action' => 'delete', $recaudadora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recaudadora->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Servicios') ?></h4>
                <?php if (!empty($empresa->servicios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->servicios as $servicio) : ?>
                        <tr>
                            <td><?= h($servicio->id) ?></td>
                            <td><?= h($servicio->nombre) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Servicios', 'action' => 'view', $servicio->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Servicios', 'action' => 'edit', $servicio->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servicios', 'action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cargo Por Servicios') ?></h4>
                <?php if (!empty($empresa->cargo_por_servicios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Recaudadora Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Tipocargo Id') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Cashout Empresa Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->cargo_por_servicios as $cargoPorServicio) : ?>
                        <tr>
                            <td><?= h($cargoPorServicio->id) ?></td>
                            <td><?= h($cargoPorServicio->recaudadora_id) ?></td>
                            <td><?= h($cargoPorServicio->empresa_id) ?></td>
                            <td><?= h($cargoPorServicio->tipocargo_id) ?></td>
                            <td><?= h($cargoPorServicio->monto) ?></td>
                            <td><?= h($cargoPorServicio->cashout_empresa_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CargoPorServicios', 'action' => 'view', $cargoPorServicio->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CargoPorServicios', 'action' => 'edit', $cargoPorServicio->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CargoPorServicios', 'action' => 'delete', $cargoPorServicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cargoPorServicio->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cedulas') ?></h4>
                <?php if (!empty($empresa->cedulas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Servicio Id') ?></th>
                            <th><?= __('Tipopago Id') ?></th>
                            <th><?= __('Cedula') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->cedulas as $cedula) : ?>
                        <tr>
                            <td><?= h($cedula->id) ?></td>
                            <td><?= h($cedula->empresa_id) ?></td>
                            <td><?= h($cedula->servicio_id) ?></td>
                            <td><?= h($cedula->tipopago_id) ?></td>
                            <td><?= h($cedula->cedula) ?></td>
                            <td><?= h($cedula->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cedulas', 'action' => 'view', $cedula->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cedulas', 'action' => 'edit', $cedula->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cedulas', 'action' => 'delete', $cedula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cedula->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cedulascitis') ?></h4>
                <?php if (!empty($empresa->cedulascitis)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Cliente Cedula Citi') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->cedulascitis as $cedulasciti) : ?>
                        <tr>
                            <td><?= h($cedulasciti->id) ?></td>
                            <td><?= h($cedulasciti->empresa_id) ?></td>
                            <td><?= h($cedulasciti->cliente_cedula_citi) ?></td>
                            <td><?= h($cedulasciti->created) ?></td>
                            <td><?= h($cedulasciti->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cedulascitis', 'action' => 'view', $cedulasciti->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cedulascitis', 'action' => 'edit', $cedulasciti->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cedulascitis', 'action' => 'delete', $cedulasciti->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cedulasciti->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cobros') ?></h4>
                <?php if (!empty($empresa->cobros)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Cliente Cedula') ?></th>
                            <th><?= __('Cliente Numero') ?></th>
                            <th><?= __('Servicio Id') ?></th>
                            <th><?= __('Fecha Emision') ?></th>
                            <th><?= __('Fecha Vencimiento') ?></th>
                            <th><?= __('Valor Minimo') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Valor Multa') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Numero Boleta Factura') ?></th>
                            <th><?= __('Cliente Nombre') ?></th>
                            <th><?= __('Extras') ?></th>
                            <th><?= __('Moneda Id') ?></th>
                            <th><?= __('Validador') ?></th>
                            <th><?= __('Datos Visa') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Obligatoria') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->cobros as $cobro) : ?>
                        <tr>
                            <td><?= h($cobro->id) ?></td>
                            <td><?= h($cobro->empresa_id) ?></td>
                            <td><?= h($cobro->cliente_cedula) ?></td>
                            <td><?= h($cobro->cliente_numero) ?></td>
                            <td><?= h($cobro->servicio_id) ?></td>
                            <td><?= h($cobro->fecha_emision) ?></td>
                            <td><?= h($cobro->fecha_vencimiento) ?></td>
                            <td><?= h($cobro->valor_minimo) ?></td>
                            <td><?= h($cobro->valor_total) ?></td>
                            <td><?= h($cobro->valor_multa) ?></td>
                            <td><?= h($cobro->tipo) ?></td>
                            <td><?= h($cobro->created) ?></td>
                            <td><?= h($cobro->modified) ?></td>
                            <td><?= h($cobro->numero_boleta_factura) ?></td>
                            <td><?= h($cobro->cliente_nombre) ?></td>
                            <td><?= h($cobro->extras) ?></td>
                            <td><?= h($cobro->moneda_id) ?></td>
                            <td><?= h($cobro->validador) ?></td>
                            <td><?= h($cobro->datos_visa) ?></td>
                            <td><?= h($cobro->parent_id) ?></td>
                            <td><?= h($cobro->obligatoria) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cobros', 'action' => 'view', $cobro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cobros', 'action' => 'edit', $cobro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cobros', 'action' => 'delete', $cobro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Comisiones Empresas') ?></h4>
                <?php if (!empty($empresa->comisiones_empresas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Servicio Id') ?></th>
                            <th><?= __('Tipocargo Id') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Cashout Empresa Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->comisiones_empresas as $comisionesEmpresa) : ?>
                        <tr>
                            <td><?= h($comisionesEmpresa->id) ?></td>
                            <td><?= h($comisionesEmpresa->empresa_id) ?></td>
                            <td><?= h($comisionesEmpresa->servicio_id) ?></td>
                            <td><?= h($comisionesEmpresa->tipocargo_id) ?></td>
                            <td><?= h($comisionesEmpresa->monto) ?></td>
                            <td><?= h($comisionesEmpresa->cashout_empresa_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ComisionesEmpresas', 'action' => 'view', $comisionesEmpresa->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ComisionesEmpresas', 'action' => 'edit', $comisionesEmpresa->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ComisionesEmpresas', 'action' => 'delete', $comisionesEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comisionesEmpresa->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Comisiones Recaudadoras') ?></h4>
                <?php if (!empty($empresa->comisiones_recaudadoras)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Servicio Id') ?></th>
                            <th><?= __('Recaudadora Id') ?></th>
                            <th><?= __('Tipocargo Id') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Cashout Empresa Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->comisiones_recaudadoras as $comisionesRecaudadora) : ?>
                        <tr>
                            <td><?= h($comisionesRecaudadora->id) ?></td>
                            <td><?= h($comisionesRecaudadora->empresa_id) ?></td>
                            <td><?= h($comisionesRecaudadora->servicio_id) ?></td>
                            <td><?= h($comisionesRecaudadora->recaudadora_id) ?></td>
                            <td><?= h($comisionesRecaudadora->tipocargo_id) ?></td>
                            <td><?= h($comisionesRecaudadora->monto) ?></td>
                            <td><?= h($comisionesRecaudadora->cashout_empresa_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ComisionesRecaudadoras', 'action' => 'view', $comisionesRecaudadora->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ComisionesRecaudadoras', 'action' => 'edit', $comisionesRecaudadora->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ComisionesRecaudadoras', 'action' => 'delete', $comisionesRecaudadora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comisionesRecaudadora->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Contadores') ?></h4>
                <?php if (!empty($empresa->contadores)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->contadores as $contadore) : ?>
                        <tr>
                            <td><?= h($contadore->id) ?></td>
                            <td><?= h($contadore->numero) ?></td>
                            <td><?= h($contadore->empresa_id) ?></td>
                            <td><?= h($contadore->fecha) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contadores', 'action' => 'view', $contadore->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contadores', 'action' => 'edit', $contadore->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contadores', 'action' => 'delete', $contadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contadore->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cuentas') ?></h4>
                <?php if (!empty($empresa->cuentas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Cuenta') ?></th>
                            <th><?= __('Tipobusqueda') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Fecha Notificacion') ?></th>
                            <th><?= __('Empleado Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->cuentas as $cuenta) : ?>
                        <tr>
                            <td><?= h($cuenta->id) ?></td>
                            <td><?= h($cuenta->cliente_id) ?></td>
                            <td><?= h($cuenta->empresa_id) ?></td>
                            <td><?= h($cuenta->cuenta) ?></td>
                            <td><?= h($cuenta->tipobusqueda) ?></td>
                            <td><?= h($cuenta->created) ?></td>
                            <td><?= h($cuenta->modified) ?></td>
                            <td><?= h($cuenta->fecha_notificacion) ?></td>
                            <td><?= h($cuenta->empleado_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cuentas', 'action' => 'view', $cuenta->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cuentas', 'action' => 'edit', $cuenta->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cuentas', 'action' => 'delete', $cuenta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuenta->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Empleados') ?></h4>
                <?php if (!empty($empresa->empleados)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Cedula') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sucursal Id') ?></th>
                            <th><?= __('Usuario') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Grupo Id') ?></th>
                            <th><?= __('Estado Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Cashout Empresa Id') ?></th>
                            <th><?= __('Terminal') ?></th>
                            <th><?= __('TokenId') ?></th>
                            <th><?= __('Es Virtual') ?></th>
                            <th><?= __('Cuenta Bancaria') ?></th>
                            <th><?= __('Banco Cuenta') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Celular') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->empleados as $empleado) : ?>
                        <tr>
                            <td><?= h($empleado->nombre) ?></td>
                            <td><?= h($empleado->cedula) ?></td>
                            <td><?= h($empleado->codigo) ?></td>
                            <td><?= h($empleado->id) ?></td>
                            <td><?= h($empleado->sucursal_id) ?></td>
                            <td><?= h($empleado->usuario) ?></td>
                            <td><?= h($empleado->password) ?></td>
                            <td><?= h($empleado->grupo_id) ?></td>
                            <td><?= h($empleado->estado_id) ?></td>
                            <td><?= h($empleado->created) ?></td>
                            <td><?= h($empleado->modified) ?></td>
                            <td><?= h($empleado->empresa_id) ?></td>
                            <td><?= h($empleado->cashout_empresa_id) ?></td>
                            <td><?= h($empleado->terminal) ?></td>
                            <td><?= h($empleado->tokenId) ?></td>
                            <td><?= h($empleado->es_virtual) ?></td>
                            <td><?= h($empleado->cuenta_bancaria) ?></td>
                            <td><?= h($empleado->banco_cuenta) ?></td>
                            <td><?= h($empleado->email) ?></td>
                            <td><?= h($empleado->celular) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Empleados', 'action' => 'view', $empleado->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Empleados', 'action' => 'edit', $empleado->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empleados', 'action' => 'delete', $empleado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Historicocobros') ?></h4>
                <?php if (!empty($empresa->historicocobros)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Cliente Cedula') ?></th>
                            <th><?= __('Cliente Numero') ?></th>
                            <th><?= __('Servicio Id') ?></th>
                            <th><?= __('Fecha Emision') ?></th>
                            <th><?= __('Fecha Vencimiento') ?></th>
                            <th><?= __('Valor Minimo') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Valor Multa') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Numero Boleta Factura') ?></th>
                            <th><?= __('Cliente Nombre') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Moneda Id') ?></th>
                            <th><?= __('Extras') ?></th>
                            <th><?= __('Datos Visa') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Cobro Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->historicocobros as $historicocobro) : ?>
                        <tr>
                            <td><?= h($historicocobro->id) ?></td>
                            <td><?= h($historicocobro->empresa_id) ?></td>
                            <td><?= h($historicocobro->cliente_cedula) ?></td>
                            <td><?= h($historicocobro->cliente_numero) ?></td>
                            <td><?= h($historicocobro->servicio_id) ?></td>
                            <td><?= h($historicocobro->fecha_emision) ?></td>
                            <td><?= h($historicocobro->fecha_vencimiento) ?></td>
                            <td><?= h($historicocobro->valor_minimo) ?></td>
                            <td><?= h($historicocobro->valor_total) ?></td>
                            <td><?= h($historicocobro->valor_multa) ?></td>
                            <td><?= h($historicocobro->tipo) ?></td>
                            <td><?= h($historicocobro->numero_boleta_factura) ?></td>
                            <td><?= h($historicocobro->cliente_nombre) ?></td>
                            <td><?= h($historicocobro->created) ?></td>
                            <td><?= h($historicocobro->modified) ?></td>
                            <td><?= h($historicocobro->moneda_id) ?></td>
                            <td><?= h($historicocobro->extras) ?></td>
                            <td><?= h($historicocobro->datos_visa) ?></td>
                            <td><?= h($historicocobro->parent_id) ?></td>
                            <td><?= h($historicocobro->cobro_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Historicocobros', 'action' => 'view', $historicocobro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Historicocobros', 'action' => 'edit', $historicocobro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Historicocobros', 'action' => 'delete', $historicocobro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicocobro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Intranetrankings') ?></h4>
                <?php if (!empty($empresa->intranetrankings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empleado Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Tipo 1') ?></th>
                            <th><?= __('Tipo 2') ?></th>
                            <th><?= __('Tipo 3') ?></th>
                            <th><?= __('Fecha Inicio') ?></th>
                            <th><?= __('Fecha Termino') ?></th>
                            <th><?= __('Semana') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->intranetrankings as $intranetranking) : ?>
                        <tr>
                            <td><?= h($intranetranking->id) ?></td>
                            <td><?= h($intranetranking->empleado_id) ?></td>
                            <td><?= h($intranetranking->empresa_id) ?></td>
                            <td><?= h($intranetranking->tipo_1) ?></td>
                            <td><?= h($intranetranking->tipo_2) ?></td>
                            <td><?= h($intranetranking->tipo_3) ?></td>
                            <td><?= h($intranetranking->fecha_inicio) ?></td>
                            <td><?= h($intranetranking->fecha_termino) ?></td>
                            <td><?= h($intranetranking->semana) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Intranetrankings', 'action' => 'view', $intranetranking->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Intranetrankings', 'action' => 'edit', $intranetranking->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Intranetrankings', 'action' => 'delete', $intranetranking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intranetranking->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Log Ws Ext') ?></h4>
                <?php if (!empty($empresa->log_ws_ext)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Entidad Id') ?></th>
                            <th><?= __('Entidad') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->log_ws_ext as $logWsExt) : ?>
                        <tr>
                            <td><?= h($logWsExt->id) ?></td>
                            <td><?= h($logWsExt->empresa_id) ?></td>
                            <td><?= h($logWsExt->entidad_id) ?></td>
                            <td><?= h($logWsExt->entidad) ?></td>
                            <td><?= h($logWsExt->created_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LogWsExt', 'action' => 'view', $logWsExt->]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LogWsExt', 'action' => 'edit', $logWsExt->]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LogWsExt', 'action' => 'delete', $logWsExt->], ['confirm' => __('Are you sure you want to delete # {0}?', $logWsExt->)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Oficinas') ?></h4>
                <?php if (!empty($empresa->oficinas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Cantidad') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->oficinas as $oficina) : ?>
                        <tr>
                            <td><?= h($oficina->id) ?></td>
                            <td><?= h($oficina->empresa_id) ?></td>
                            <td><?= h($oficina->nombre) ?></td>
                            <td><?= h($oficina->cantidad) ?></td>
                            <td><?= h($oficina->created) ?></td>
                            <td><?= h($oficina->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Oficinas', 'action' => 'view', $oficina->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Oficinas', 'action' => 'edit', $oficina->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Oficinas', 'action' => 'delete', $oficina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oficina->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pagos') ?></h4>
                <?php if (!empty($empresa->pagos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cobro Id') ?></th>
                            <th><?= __('Empleado Id') ?></th>
                            <th><?= __('Sucursal Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Tipopago Id') ?></th>
                            <th><?= __('Mediopago Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Numero Recibo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Numero Mediopago') ?></th>
                            <th><?= __('Observacion') ?></th>
                            <th><?= __('Estadopago Id') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Extras') ?></th>
                            <th><?= __('Dolar Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Intento Pago') ?></th>
                            <th><?= __('Reimpresion') ?></th>
                            <th><?= __('Tiempo') ?></th>
                            <th><?= __('Tiempo Real') ?></th>
                            <th><?= __('Validador Web Service') ?></th>
                            <th><?= __('Pago Express') ?></th>
                            <th><?= __('Sumar') ?></th>
                            <th><?= __('Tiempo Respuesta Ws') ?></th>
                            <th><?= __('Error') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Estado Liquidacion') ?></th>
                            <th><?= __('Fecha Liquidacion') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->pagos as $pago) : ?>
                        <tr>
                            <td><?= h($pago->id) ?></td>
                            <td><?= h($pago->cobro_id) ?></td>
                            <td><?= h($pago->empleado_id) ?></td>
                            <td><?= h($pago->sucursal_id) ?></td>
                            <td><?= h($pago->empresa_id) ?></td>
                            <td><?= h($pago->tipopago_id) ?></td>
                            <td><?= h($pago->mediopago_id) ?></td>
                            <td><?= h($pago->fecha) ?></td>
                            <td><?= h($pago->monto) ?></td>
                            <td><?= h($pago->numero_recibo) ?></td>
                            <td><?= h($pago->created) ?></td>
                            <td><?= h($pago->modified) ?></td>
                            <td><?= h($pago->numero_mediopago) ?></td>
                            <td><?= h($pago->observacion) ?></td>
                            <td><?= h($pago->estadopago_id) ?></td>
                            <td><?= h($pago->tipo) ?></td>
                            <td><?= h($pago->extras) ?></td>
                            <td><?= h($pago->dolar_id) ?></td>
                            <td><?= h($pago->cliente_id) ?></td>
                            <td><?= h($pago->intento_pago) ?></td>
                            <td><?= h($pago->reimpresion) ?></td>
                            <td><?= h($pago->tiempo) ?></td>
                            <td><?= h($pago->tiempo_real) ?></td>
                            <td><?= h($pago->validador_web_service) ?></td>
                            <td><?= h($pago->pago_express) ?></td>
                            <td><?= h($pago->sumar) ?></td>
                            <td><?= h($pago->tiempo_respuesta_ws) ?></td>
                            <td><?= h($pago->error) ?></td>
                            <td><?= h($pago->parent_id) ?></td>
                            <td><?= h($pago->estado_liquidacion) ?></td>
                            <td><?= h($pago->fecha_liquidacion) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pagos', 'action' => 'view', $pago->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pagos', 'action' => 'edit', $pago->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pagos', 'action' => 'delete', $pago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pagosbk') ?></h4>
                <?php if (!empty($empresa->pagosbk)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cobro Id') ?></th>
                            <th><?= __('Empleado Id') ?></th>
                            <th><?= __('Sucursal Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Tipopago Id') ?></th>
                            <th><?= __('Mediopago Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Numero Recibo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Numero Mediopago') ?></th>
                            <th><?= __('Observacion') ?></th>
                            <th><?= __('Estadopago Id') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Extras') ?></th>
                            <th><?= __('Dolar Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Intento Pago') ?></th>
                            <th><?= __('Reimpresion') ?></th>
                            <th><?= __('Tiempo') ?></th>
                            <th><?= __('Tiempo Real') ?></th>
                            <th><?= __('Validador Web Service') ?></th>
                            <th><?= __('Pago Express') ?></th>
                            <th><?= __('Sumar') ?></th>
                            <th><?= __('Tiempo Respuesta Ws') ?></th>
                            <th><?= __('Error') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->pagosbk as $pagosbk) : ?>
                        <tr>
                            <td><?= h($pagosbk->id) ?></td>
                            <td><?= h($pagosbk->cobro_id) ?></td>
                            <td><?= h($pagosbk->empleado_id) ?></td>
                            <td><?= h($pagosbk->sucursal_id) ?></td>
                            <td><?= h($pagosbk->empresa_id) ?></td>
                            <td><?= h($pagosbk->tipopago_id) ?></td>
                            <td><?= h($pagosbk->mediopago_id) ?></td>
                            <td><?= h($pagosbk->fecha) ?></td>
                            <td><?= h($pagosbk->monto) ?></td>
                            <td><?= h($pagosbk->numero_recibo) ?></td>
                            <td><?= h($pagosbk->created) ?></td>
                            <td><?= h($pagosbk->modified) ?></td>
                            <td><?= h($pagosbk->numero_mediopago) ?></td>
                            <td><?= h($pagosbk->observacion) ?></td>
                            <td><?= h($pagosbk->estadopago_id) ?></td>
                            <td><?= h($pagosbk->tipo) ?></td>
                            <td><?= h($pagosbk->extras) ?></td>
                            <td><?= h($pagosbk->dolar_id) ?></td>
                            <td><?= h($pagosbk->cliente_id) ?></td>
                            <td><?= h($pagosbk->intento_pago) ?></td>
                            <td><?= h($pagosbk->reimpresion) ?></td>
                            <td><?= h($pagosbk->tiempo) ?></td>
                            <td><?= h($pagosbk->tiempo_real) ?></td>
                            <td><?= h($pagosbk->validador_web_service) ?></td>
                            <td><?= h($pagosbk->pago_express) ?></td>
                            <td><?= h($pagosbk->sumar) ?></td>
                            <td><?= h($pagosbk->tiempo_respuesta_ws) ?></td>
                            <td><?= h($pagosbk->error) ?></td>
                            <td><?= h($pagosbk->parent_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pagosbk', 'action' => 'view', $pagosbk->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pagosbk', 'action' => 'edit', $pagosbk->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pagosbk', 'action' => 'delete', $pagosbk->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagosbk->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Promociones') ?></h4>
                <?php if (!empty($empresa->promociones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Fecha Desde') ?></th>
                            <th><?= __('Fecha Hasta') ?></th>
                            <th><?= __('Contador Pagos') ?></th>
                            <th><?= __('Premios') ?></th>
                            <th><?= __('Contador Premios') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->promociones as $promocione) : ?>
                        <tr>
                            <td><?= h($promocione->id) ?></td>
                            <td><?= h($promocione->empresa_id) ?></td>
                            <td><?= h($promocione->nombre) ?></td>
                            <td><?= h($promocione->fecha_desde) ?></td>
                            <td><?= h($promocione->fecha_hasta) ?></td>
                            <td><?= h($promocione->contador_pagos) ?></td>
                            <td><?= h($promocione->premios) ?></td>
                            <td><?= h($promocione->contador_premios) ?></td>
                            <td><?= h($promocione->descripcion) ?></td>
                            <td><?= h($promocione->monto) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Promociones', 'action' => 'view', $promocione->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Promociones', 'action' => 'edit', $promocione->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Promociones', 'action' => 'delete', $promocione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promocione->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Queue Configurations') ?></h4>
                <?php if (!empty($empresa->queue_configurations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Recaudadora Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->queue_configurations as $queueConfiguration) : ?>
                        <tr>
                            <td><?= h($queueConfiguration->id) ?></td>
                            <td><?= h($queueConfiguration->empresa_id) ?></td>
                            <td><?= h($queueConfiguration->recaudadora_id) ?></td>
                            <td><?= h($queueConfiguration->active) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'QueueConfigurations', 'action' => 'view', $queueConfiguration->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'QueueConfigurations', 'action' => 'edit', $queueConfiguration->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'QueueConfigurations', 'action' => 'delete', $queueConfiguration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $queueConfiguration->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Recargas') ?></h4>
                <?php if (!empty($empresa->recargas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empleado Id') ?></th>
                            <th><?= __('Sucursal Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Tipopago Id') ?></th>
                            <th><?= __('Mediopago Id') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Numero Recibo') ?></th>
                            <th><?= __('Numero Mediopago') ?></th>
                            <th><?= __('Observacion') ?></th>
                            <th><?= __('Estadopago Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Numero Recarga') ?></th>
                            <th><?= __('Extras') ?></th>
                            <th><?= __('Moneda Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->recargas as $recarga) : ?>
                        <tr>
                            <td><?= h($recarga->id) ?></td>
                            <td><?= h($recarga->empleado_id) ?></td>
                            <td><?= h($recarga->sucursal_id) ?></td>
                            <td><?= h($recarga->empresa_id) ?></td>
                            <td><?= h($recarga->tipopago_id) ?></td>
                            <td><?= h($recarga->mediopago_id) ?></td>
                            <td><?= h($recarga->monto) ?></td>
                            <td><?= h($recarga->numero_recibo) ?></td>
                            <td><?= h($recarga->numero_mediopago) ?></td>
                            <td><?= h($recarga->observacion) ?></td>
                            <td><?= h($recarga->estadopago_id) ?></td>
                            <td><?= h($recarga->created) ?></td>
                            <td><?= h($recarga->modified) ?></td>
                            <td><?= h($recarga->numero_recarga) ?></td>
                            <td><?= h($recarga->extras) ?></td>
                            <td><?= h($recarga->moneda_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Recargas', 'action' => 'view', $recarga->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Recargas', 'action' => 'edit', $recarga->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recargas', 'action' => 'delete', $recarga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recarga->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Seguros') ?></h4>
                <?php if (!empty($empresa->seguros)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->seguros as $seguro) : ?>
                        <tr>
                            <td><?= h($seguro->id) ?></td>
                            <td><?= h($seguro->empresa_id) ?></td>
                            <td><?= h($seguro->nombre) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Seguros', 'action' => 'view', $seguro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Seguros', 'action' => 'edit', $seguro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seguros', 'action' => 'delete', $seguro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seguro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
