<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Empresa> $empresas
 */
?>
<div class="empresas index content">
    <?= $this->Html->link(__('New Empresa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empresas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('categoriaempresa_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('funcion') ?></th>
                    <th><?= $this->Paginator->sort('pago_parcial') ?></th>
                    <th><?= $this->Paginator->sort('pago_abono') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('contacto_nombre') ?></th>
                    <th><?= $this->Paginator->sort('contacto_fono') ?></th>
                    <th><?= $this->Paginator->sort('opcion_numero_recibo') ?></th>
                    <th><?= $this->Paginator->sort('opcion_observacion') ?></th>
                    <th><?= $this->Paginator->sort('opcion_numero_cliente') ?></th>
                    <th><?= $this->Paginator->sort('impresion_layout') ?></th>
                    <th><?= $this->Paginator->sort('recarga_fija') ?></th>
                    <th><?= $this->Paginator->sort('opcion_cedula') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('visa_id') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa): ?>
                <tr>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                    <td><?= $empresa->hasValue('categoriaempresa') ? $this->Html->link($empresa->categoriaempresa->nombre, ['controller' => 'Categoriaempresas', 'action' => 'view', $empresa->categoriaempresa->id]) : '' ?></td>
                    <td><?= h($empresa->nombre) ?></td>
                    <td><?= h($empresa->funcion) ?></td>
                    <td><?= $empresa->pago_parcial === null ? '' : $this->Number->format($empresa->pago_parcial) ?></td>
                    <td><?= $empresa->pago_abono === null ? '' : $this->Number->format($empresa->pago_abono) ?></td>
                    <td><?= h($empresa->created) ?></td>
                    <td><?= h($empresa->modified) ?></td>
                    <td><?= h($empresa->contacto_nombre) ?></td>
                    <td><?= h($empresa->contacto_fono) ?></td>
                    <td><?= h($empresa->opcion_numero_recibo) ?></td>
                    <td><?= h($empresa->opcion_observacion) ?></td>
                    <td><?= h($empresa->opcion_numero_cliente) ?></td>
                    <td><?= h($empresa->impresion_layout) ?></td>
                    <td><?= h($empresa->recarga_fija) ?></td>
                    <td><?= h($empresa->opcion_cedula) ?></td>
                    <td><?= h($empresa->activo) ?></td>
                    <td><?= h($empresa->email) ?></td>
                    <td><?= $empresa->visa_id === null ? '' : $this->Number->format($empresa->visa_id) ?></td>
                    <td><?= h($empresa->imagen) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div> -->
</div>
