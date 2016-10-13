<h2>INSERTAR NUEVO PRODUCTO</h2>
<?php
echo $this->Form->create ( 'Producto' );
echo $this->Form->input ( 'nombre' );
echo $this->Form->input ( 'descripcion' );
?>
<?php echo $this->Form->end('Crear Producto');?>
