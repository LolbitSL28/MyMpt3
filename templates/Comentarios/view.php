<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentario $comentario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Comentario'), ['action' => 'edit', $comentario->Id_Comentario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Comentario'), ['action' => 'delete', $comentario->Id_Comentario], ['confirm' => __('Are you sure you want to delete # {0}?', $comentario->Id_Comentario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Comentarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Comentario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentarios view content">
            <h3><?= h($comentario->Id_Comentario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Contenido') ?></th>
                    <td><?= h($comentario->Contenido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Comentario') ?></th>
                    <td><?= $this->Number->format($comentario->Id_Comentario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuario') ?></th>
                    <td><?= $this->Number->format($comentario->Id_Usuario) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
