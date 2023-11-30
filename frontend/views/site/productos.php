<?php
use yii\helpers\Html;

$this->registerCssFile('@web/css/fontawesome-all.min.css');
$this->registerCssFile('@web/css/2.css');
$this->registerCssFile('@web/css/estilo.css');

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-productos">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>¡Hola Mundo desde Yii2!</p>
	<?= \yii\helpers\Html::a('Abrir Proyecto Externo', 'http://localhost/SISTEMA6TO/login.php', ['target' => '_blank', 'class' => 'btn btn-primary']) ?>

<?php
$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "cursoyii2";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
    <div class="container">
		<div class="row">
	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Código</th>
					<th>Descripción</th>
					<th>Precio de compra</th>
					<th>Precio de venta</th>
					<th>Existencia</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id_producto ?></td>
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->descripcion ?></td>
					<td><?php echo $producto->precio_compra ?></td>
					<td><?php echo $producto->precio_venta ?></td>
					<td><?php echo $producto->stock ?></td>
					
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id_producto?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id_producto?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<hr>
		<br>
		<br>
	</div>
    </div>
	</div>
</div>