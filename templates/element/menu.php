<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        CakePHP: the rapid development PHP framework:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'estilo_home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="info">
        <div class="cel_email">
            Teléfono: 633-107-1341 &nbsp &nbsp Correo Electrónico: <a href="aby.mrod@gmail.com">aby.mrod@gmail.com</a>
        </div>
    </nav>
    
    <nav class="menu">
        <div>
            <img class="img_logo" src="webroot/img/Logo M&M (Fatima).jpeg">
        </div>
        <label class="logo">Abarrotes M&M🍎🥑</label>
        <ul class="menu_options">

            <li>
            <?= $this->Html->link(__('Cerrar Sesion'), ['controller' => 'Users', 'action' => 'logout']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Articulos'), ['controller' => 'Producto', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Registrar Articulos'), ['controller' => 'Producto', 'action' => 'add']); ?>
            </li>
            <li>
                <a href="#">Servicios</a>
            </li>
            <li>
            <?= $this->Html->link(__('Usuarios Registrados'), ['controller' => 'Users', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Comentarios'), ['controller' => 'Comentarios', 'action' => 'index']); ?>
            </li>
        </ul>
    </nav>
</body>
</html>