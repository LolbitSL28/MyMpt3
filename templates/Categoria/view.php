<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categorium->Id_Categoria], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Categoria'), ['action' => 'delete', $categorium->Id_Categoria], ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $categorium->Id_Categoria), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nueva Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoria view content">
            <h3><?= h($categorium->Id_Categoria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Cat') ?></th>
                    <td><?= h($categorium->Nombre_Cat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion Cat') ?></th>
                    <td><?= h($categorium->Descripcion_Cat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categoria') ?></th>
                    <td><?= $this->Number->format($categorium->Id_Categoria) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
