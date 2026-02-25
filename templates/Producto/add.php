<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Agregar Producto') ?></legend>
                <?php
                    echo $this->Form->control('Nombre_Cat');
                    echo $this->Form->control('Nombre_Prod');
                    echo $this->Form->control('Descripcion_Producto');
                    echo $this->Form->control('Marca');
                    echo $this->Form->control('Cant_Prod');
                    echo $this->Form->control('Precio');
                    echo $this->Form->control('Nombre_Prov');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
