<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentario $comentario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $comentario->Id_Comentario],
                ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $comentario->Id_Comentario), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Comentarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentarios form content">
            <?= $this->Form->create($comentario) ?>
            <fieldset>
                <legend><?= __('Edit Comentario') ?></legend>
                <?php
                    echo $this->Form->control('Id_Usuario',['type' => 'hidden', 'value' => 3]);
                    echo $this->Form->control('Contenido');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
