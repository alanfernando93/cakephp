<h2>Listado de Productos</h2>
<div style="width:500px">
<table border="1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Descripcion</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($dato as $dat):?>
			<tr>
			<td><?php echo $dat['Producto']['nombre'];?></td>
			<td><?php echo $dat['Producto']['descripcion'];?></td>
			<td>
					<?php echo $this->Html->link('Editar',array('action'=>'editar',$dat['Producto']['id']));?>
					<?php echo $this->Html->link('Eliminar',array('action'=>'eliminar',$dat['Producto']['id']),array('escape'=>false,'confirm'=>'Esta seguro de eliminar'));?>
				</td>
		</tr>
		<?php endforeach;?>	
	</tbody>
</table>
</div>
<?php echo $this->Html->link('INSERTAR NUEVO PRODUCTO',array('action'=>'insertar'));?>
