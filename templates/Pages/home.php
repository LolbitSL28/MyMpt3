<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    Abarrotes M&M
        <?= $this->fetch('title') ?>
    </title>
    <link rel="icon" href="webroot/Logo M&M (Fatima).ico">

    

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'estilo_home','info','styles_productos']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
<nav class="info">
        <div class="cel_email">
            Telefono: 633-107-1341 &nbsp &nbsp Correo Electronico: <a href="aby.mrod@gmail.com">aby.mrod@gmail.com</a>
        </div>
    </nav>
    
    <nav class="menu">
        <div>
            <img class="img_logo" src="webroot/img/Logo M&M (Fatima).jpeg">
        </div>
        <label class="logo">Abarrotes M&M🍎🥑</label>
        <ul class="menu_options">

            <li>
            <?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']); ?>
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
        </ul>
    </nav>

<!--Nombre de los programadores o cualquier cosa acerca de la empresa?-->
    
<!--div class="main">
        <h1>Desarrolladores</h1>
        <p>
        • Francisco Alonso Bujanda Noriega<br>
        • Jose Armando Campos Castro<br>
        • Mayte Coronado Miranda<br>
        • Lucia Gamez Ballesteros<br>
        • Fatima Isabel Hernandez Garcia<br>
        • Alejandra Murga Benitez<br>
        • Karen Paola Noriega Espinoza<br>
        • Hannah Valeria Rivas Chay
    </div-->

        <section class="home" id="home">

    <div class="content">
        <div class="contenedor_img">
        <img class="img_publi" src="webroot/img/productos-varios.png">
        </div>
        <h3>Los Mejores Productos a la Vuelta de la Esquina!!!</h3>
        <p>Nuestra mision es cubrir las necesidades de nuestros clientes vendiendo productos de la canasta básica a un precio más bajo, comparado al precio de un supermercado. Nuestra vision es crecer como empresa y dar un excelente servicio de calidad a nuestros clientes y empleados. Generando ingresos gracias a la compra y venta de mercancía. </p>
        <p>Nos encontramos ubicados en Calle 8 Avenida 48. Infonavit Alamito, Agua Prieta Sonora.</p> 
    </div>
</section>
<div class="content2"><br>
<div class="categoria">VARIEDAD DE PRODUCTOS</div>
    <div class="page-content">    
    <div class="product-container">
            <h3>Doritos Nacho</h3>
            <img src="webroot\img\imagenes_productos\doritos.png" />
            <h1>$20</h1>
            
        </div>

        <div class="product-container">
            <h3>Sabritas Original</h3>
            <img src="webroot/img/imagenes_productos/sabritas.jpg" />
            <h1>$15</h1>
            
        </div>

        <div class="product-container">
            <h3>Cheetos Torciditos</h3>
            <img src="webroot/img/imagenes_productos/cheetos.jpg" />
            <h1>$25</h1>
            
        </div>

        <div class="product-container">
            <h3>Tostitos</h3>
            <img src="webroot/img/imagenes_productos/tostitos.png" />
            <h1>$35</h1>
            
        </div>
<!--Galletas-->
        <div class="product-container">
            <h3>Galletas Chokis</h3>
            <img src="webroot/img/imagenes_productos/chokis.jpg" />
            <h1>$20</h1>
            
        </div>

        <div class="product-container">
            <h3>Galletas Maria</h3>
            <img src="webroot/img/imagenes_productos/marias.jpeg" />
            <h1>$20</h1>
            
        </div>
        <div class="product-container">
            <h3>Galletas Emperador</h3>
            <img src="webroot/img/imagenes_productos/emperador.jpg" />
            <h1>$27</h1>
            
        </div>
        <div class="product-container">
            <h3>Galletas Oreo</h3>
            <img src="webroot/img/imagenes_productos/oreo.png" />
            <h1>$18</h1>
            
        </div>
        <div class="product-container">
            <h3>Nito</h3>
            <img src="webroot/img/imagenes_productos/nito.jpg" />
            <h1>$16</h1>
            
        </div>
        <div class="product-container">
            <h3>Pinguinos Marinela</h3>
            <img src="webroot/img/imagenes_productos/pinguinos.jpg" />
            <h1>$25</h1>
            
        </div>
        <div class="product-container">
            <h3>Gansito Marinela</h3>
            <img src="webroot/img/imagenes_productos/gansito.jpg" />
            <h1>$15</h1>
            
        </div>
        <div class="product-container">
            <h3>Pan Blanco</h3>
            <img src="webroot/img/imagenes_productos/panBlanco.jpg" />
            <h1>$35</h1>
            
        </div>
        <div class="product-container">
            <h3>Tortillas de Harina</h3>
            <img src="webroot/img/imagenes_productos/tortillas.jpg" />
            <h1>$30</h1>
            
        </div>
        <div class="product-container">
            <h3>RikoPollo</h3>
            <img src="webroot/img/imagenes_productos/rikopolllo.jpg" />
            <h1>$16</h1>
            
        </div>
        <div class="product-container">
            <h3>Azucar Zulka</h3>
            <img src="webroot/img/imagenes_productos/azucar.jpg" />
            <h1>$35</h1>
            
        </div>
        <div class="product-container">
            <h3>Fabuloso</h3>
            <img src="webroot/img/imagenes_productos/fabuloso.jpg" />
            <h1>$32</h1>
            
        </div>
    </div>
</div>
<div class="content3">

<h3>Desarrolladores</h3>
        <p>
        • Francisco Alonso Bujanda Noriega
        • Jose Armando Campos Castro
        • Mayte Coronado Miranda
        • Lucia Gamez Ballesteros
        • Fatima Isabel Hernandez Garcia
        • Alejandra Murga Benitez
        • Karen Paola Noriega Espinoza
        • Hannah Valeria Rivas Chay
        </p>
</div>
</body>
</html>