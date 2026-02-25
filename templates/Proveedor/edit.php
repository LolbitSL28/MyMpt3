<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $proveedor->Id_Prov],
                ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $proveedor->Id_Prov), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor form content">
            <?= $this->Form->create($proveedor) ?>
            <fieldset>
                <legend><?= __('Editar Proveedor') ?></legend>
                <?php
                    echo $this->Form->control('Nombre_Prov');
                    echo $this->Form->control('Telefono_Prov');
                    echo $this->Form->control('Direccion_Prov');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
