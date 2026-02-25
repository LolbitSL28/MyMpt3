<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Producto> $producto
 */
?>
<div class="producto index content">
    <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Producto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Producto') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Cat') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Prod') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion_Producto') ?></th>
                    <th><?= $this->Paginator->sort('Marca') ?></th>
                    <th><?= $this->Paginator->sort('Cant_Prod') ?></th>
                    <th><?= $this->Paginator->sort('Precio') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Prov') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($producto as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->Id_Producto) ?></td>
                    <td><?= h($producto->Nombre_Cat) ?></td>
                    <td><?= h($producto->Nombre_Prod) ?></td>
                    <td><?= h($producto->Descripcion_Producto) ?></td>
                    <td><?= h($producto->Marca) ?></td>
                    <td><?= $this->Number->format($producto->Cant_Prod) ?></td>
                    <td><?= $this->Number->format($producto->Precio) ?></td>
                    <td><?= h($producto->Nombre_Prov) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $producto->Id_Producto]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $producto->Id_Producto]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $producto->Id_Producto], ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $producto->Id_Producto)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')) ?></p>
    </div>
</div>
