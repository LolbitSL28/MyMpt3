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
            <?= $this->Html->link(__('Editar Venta'), ['action' => 'edit', $ventum->Id_Venta], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Elimnar Venta'), ['action' => 'delete', $ventum->Id_Venta], ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $ventum->Id_Venta), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nueva Venta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venta view content">
            <h3><?= h($ventum->Id_Venta) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Empl') ?></th>
                    <td><?= h($ventum->Nombre_Empl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oferta') ?></th>
                    <td><?= h($ventum->Oferta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descuento') ?></th>
                    <td><?= h($ventum->Descuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Venta') ?></th>
                    <td><?= $this->Number->format($ventum->Id_Venta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Producto') ?></th>
                    <td><?= $this->Number->format($ventum->Id_Producto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($ventum->Cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio Total') ?></th>
                    <td><?= $this->Number->format($ventum->Precio_Total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($ventum->Fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
