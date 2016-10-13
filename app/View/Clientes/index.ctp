<h2>LISTADO DE CLIENTES</h2>
<table border="1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Nit</th>
                        <th>Correo</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($dato as $dat):?>
			<tr>
				<td><?php echo $dat['Cliente']['nombre'];?></td>
				<td><?php echo $dat['Cliente']['telefono'];?></td>
				<td><?php echo $dat['Cliente']['nit'];?></td>
				<td><?php echo $dat['Cliente']['correo'];?></td>
				<td>
					<?php echo $this->Html->link('Editar',array('action'=>'editar',$dat['Cliente']['id']));?>
					<?php echo $this->Html->link('Eliminar',array('action'=>'eliminar',$dat['Cliente']['id']),array('escape'=>false,'confirm'=>'Esta seguro de eliminar'));?>
				</td>
			</tr>
		<?php endforeach;?>	
	</tbody>
</table>
<?php echo $this->Html->link('INSERTAR NUEVO CLIENTE',array('action'=>'insertar'));?>
