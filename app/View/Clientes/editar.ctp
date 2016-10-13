<h1>EDITAR CLIENTE</h1>
<?php 
	echo $this->Form->create('Cliente');
  	echo $this->Form->input('nombre');
  	echo $this->Form->input('telefono');
  	echo $this->Form->input('nit');
  	echo $this->Form->input('correo');
  	echo $this->Form->label('Ciudades');
  	echo $this->Form->select('');

echo $this->Form->end('Guardar Modificacion');?>

