<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado $empleado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $empleado->Id_Empleado],
                ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $empleado->Id_Empleado), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Empleados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleado form content">
            <?= $this->Form->create($empleado) ?>
            <fieldset>
                <legend><?= __('Editar Empleado') ?></legend>
                <?php
                    echo $this->Form->control('Nombre_Empl');
                    echo $this->Form->control('Rol_Empl');
                    echo $this->Form->control('Telefono_Empl');
                    echo $this->Form->control('Direccion_Empl');
                    echo $this->Form->control('Sueldo_Empl');
                    echo $this->Form->control('Id_Usuario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
