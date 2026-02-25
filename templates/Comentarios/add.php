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
            <?= $this->Html->link(__('Lista de Comentarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentarios form content">
            <?= $this->Form->create($comentario) ?>
            <fieldset>
                <legend><?= __('Agregar Comentario') ?></legend>
                <?php
                    echo $this->Form->control('Id_Usuario', ['type' => 'hidden', 'value' => 3]);
                    //echo $this->Form->control('Id_Usuario');
                    echo $this->Form->control('Contenido');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
