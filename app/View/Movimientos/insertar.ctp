<h2>INSERTAR NUEVO MOVIMIENTO</h2>
<?php 
	echo $this->Form->create('Movimiento');
	//print_r($dato);die();
?>
	<select id="MovimientoProductos" name="data[Movimiento][Productos]">
	<option value="0" enable>--SELECCIONAR--</option>
	<?php foreach($dato as $key => $value):?>
	<option value="<?php print $key;?>"><?php print $value;?></option>
	<?php endforeach; ?>
	</select>
<?php
	//echo $this->Form->select('Productos',$dato,array('value'=>'--SELECCIONAR--'));
	echo $this->Form->input('Ingreso');
	echo $this->Form->input('Salida');
?>
<?php echo $this->Form->end('Crear Movimiento');?>