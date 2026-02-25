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
            <?= $this->Html->link(__('Editar Producto'), ['action' => 'edit', $producto->Id_Producto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Producto'), ['action' => 'delete', $producto->Id_Producto], ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $producto->Id_Producto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto view content">
            <h3><?= h($producto->Id_Producto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Cat') ?></th>
                    <td><?= h($producto->Nombre_Cat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre Prod') ?></th>
                    <td><?= h($producto->Nombre_Prod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion Producto') ?></th>
                    <td><?= h($producto->Descripcion_Producto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($producto->Marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre Prov') ?></th>
                    <td><?= h($producto->Nombre_Prov) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Producto') ?></th>
                    <td><?= $this->Number->format($producto->Id_Producto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cant Prod') ?></th>
                    <td><?= $this->Number->format($producto->Cant_Prod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($producto->Precio) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
