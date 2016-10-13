<h1>EDITAR PRODUCTO</h1>
<?php 
	echo $this->Form->create('Producto');
  	echo $this->Form->input('nombre');
  	echo $this->Form->input('descripcion');

echo $this->Form->end('Guardar Modificacion');?>