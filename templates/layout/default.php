<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Abarrotes M&M';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <link rel="icon" href="webroot/Logo M&M (Fatima).ico">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'home','cake']) ?>

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
            <!--Tira error en el controlador :[ -->
            <!--a href="home.php"><img class="img_logo" src="webroot/img/Logo M&M (Fatima).jpeg"--></a>
            <img class="img_logo" src="webroot/img/Logo M&M (Fatima).jpeg">
        </div>
        <label class="logo">Abarrotes M&M🍎🥑</label>
        <ul class="menu_options">
            
        <li>
            <?= $this->Html->link(__('Inicio'), ['controller' => 'Pages', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Ventas'), ['controller' => 'Venta', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Productos'), ['controller' => 'Producto', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Categoria'), ['controller' => 'Categoria', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Proveedores'), ['controller' => 'Proveedor', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Empleados'), ['controller' => 'Empleado', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Usuarios'), ['controller' => 'Users', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Comentarios'), ['controller' => 'Comentarios', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']); ?>
            </li>
        </ul>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
