<h2>INSERTAR NUEVO CLIENTE</h2>
<?php 
	echo $this->Form->create('Cliente');
	echo $this->Form->input('nombre');
	echo $this->Form->input('telefono');
	echo $this->Form->input('nit');
	echo $this->Form->input('correo');
	//print_r($dato);
	echo $this->Form->label('Ciudades');
  	echo $this->Form->select('Cuidades',$dato);
?>
<?php echo $this->Form->end('Crear Cliente');?>