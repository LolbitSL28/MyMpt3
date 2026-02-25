<?= $this->Html->css(['normalize.min', 'milligram.min', 'estilo_login', 'estilo_home','cake']) ?>

<div class="users form">
    <?= $this->Flash->render() ?>
    <div class="login_box">
    <h3>Iniciar Sesión</h3>
    <?= $this->Form->create() ?>
    <fieldset>
    <div class="email">
        <?= $this->Form->control('email', ['required' => true]) ?>
    </div>
    <div class="password">
        <?= $this->Form->control('password', ['required' => true]) ?>
    </div>  
    </fieldset>
    <div class="login">
    <?= $this->Form->submit(__('Iniciar Sesión')); ?>
    <?= $this->Form->end() ?>
    </div>
    <div class="registrarse">
    <?= $this->Html->link("Registrarse", ['action' => 'add']) ?>
</div> </div> 
