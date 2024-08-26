<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 * @var \Cake\Collection\CollectionInterface|string[] $categoriaempresas
 * @var \Cake\Collection\CollectionInterface|string[] $opcionesrecargas
 * @var \Cake\Collection\CollectionInterface|string[] $identificadorcobros
 * @var \Cake\Collection\CollectionInterface|string[] $mediopagos
 * @var \Cake\Collection\CollectionInterface|string[] $recaudadoras
 * @var \Cake\Collection\CollectionInterface|string[] $servicios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Add Empresa') ?></legend>
                <?php
                    echo $this->Form->control('categoriaempresa_id', ['options' => $categoriaempresas]);
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('funcion');
                    echo $this->Form->control('pago_parcial');
                    echo $this->Form->control('pago_abono');
                    echo $this->Form->control('contacto_nombre');
                    echo $this->Form->control('contacto_fono');
                    echo $this->Form->control('opcion_numero_recibo');
                    echo $this->Form->control('opcion_observacion');
                    echo $this->Form->control('opcion_numero_cliente');
                    echo $this->Form->control('impresion_layout');
                    echo $this->Form->control('recarga_fija');
                    echo $this->Form->control('opcion_cedula');
                    echo $this->Form->control('activo');
                    echo $this->Form->control('email');
                    echo $this->Form->control('visa_id');
                    echo $this->Form->control('imagen');
                    echo $this->Form->control('opcionesrecargas._ids', ['options' => $opcionesrecargas]);
                    echo $this->Form->control('identificadorcobros._ids', ['options' => $identificadorcobros]);
                    echo $this->Form->control('mediopagos._ids', ['options' => $mediopagos]);
                    echo $this->Form->control('recaudadoras._ids', ['options' => $recaudadoras]);
                    echo $this->Form->control('servicios._ids', ['options' => $servicios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
