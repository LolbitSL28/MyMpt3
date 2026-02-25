<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comentario> $comentarios
 */
?>
<div class="comentarios index content">
    <?= $this->Html->link(__('Nuevo Comentario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comentarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Comentario') ?></th>
                    <th><?= $this->Paginator->sort('Id_Usuario') ?></th>
                    <th><?= $this->Paginator->sort('Contenido') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentarios as $comentario): ?>
                <tr>
                    <td><?= $this->Number->format($comentario->Id_Comentario) ?></td>
                    <td><?= $this->Number->format($comentario->Id_Usuario) ?></td>
                    <td><?= h($comentario->Contenido) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $comentario->Id_Comentario]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $comentario->Id_Comentario]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $comentario->Id_Comentario], ['confirm' => __('Seguro que desea elimnar el registro # {0}?', $comentario->Id_Comentario)]) ?>
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
