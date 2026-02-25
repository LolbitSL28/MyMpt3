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
            <?= $this->Html->link(__('Editat Empleado'), ['action' => 'edit', $empleado->Id_Empleado], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Empleado'), ['action' => 'delete', $empleado->Id_Empleado], ['confirm' => __('Seguro que desea eliminar el registro # {0}?', $empleado->Id_Empleado), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Empleado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Empleado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleado view content">
            <h3><?= h($empleado->Id_Empleado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Empl') ?></th>
                    <td><?= h($empleado->Nombre_Empl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rol Empl') ?></th>
                    <td><?= h($empleado->Rol_Empl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion Empl') ?></th>
                    <td><?= h($empleado->Direccion_Empl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Empleado') ?></th>
                    <td><?= $this->Number->format($empleado->Id_Empleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono Empl') ?></th>
                    <td><?= $this->Number->format($empleado->Telefono_Empl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sueldo Empl') ?></th>
                    <td><?= $this->Number->format($empleado->Sueldo_Empl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuario') ?></th>
                    <td><?= $this->Number->format($empleado->Id_Usuario) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
