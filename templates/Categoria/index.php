<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Categorium> $categoria
 */
?>
<div class="categoria index content">
    <?= $this->Html->link(__('Nueva Categoria'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categoria') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Categoria') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Cat') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion_Cat') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoria as $categorium): ?>
                <tr>
                    <td><?= $this->Number->format($categorium->Id_Categoria) ?></td>
                    <td><?= h($categorium->Nombre_Cat) ?></td>
                    <td><?= h($categorium->Descripcion_Cat) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $categorium->Id_Categoria]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categorium->Id_Categoria]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $categorium->Id_Categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->Id_Categoria)]) ?>
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
