<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum $ventum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $ventum->Id_Venta],
                ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $ventum->Id_Venta), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venta form content">
            <?= $this->Form->create($ventum) ?>
            <fieldset>
                <legend><?= __('Editar Venta') ?></legend>
                <?php
                    echo $this->Form->control('Id_Producto');
                    echo $this->Form->control('Cantidad');
                    echo $this->Form->control('Fecha');
                    echo $this->Form->control('Nombre_Empl');
                    echo $this->Form->control('Oferta');
                    echo $this->Form->control('Descuento');
                    echo $this->Form->control('Precio_Total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
