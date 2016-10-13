<h2>Listado de movimientos</h2>
<table border="1">
	<thead>
		<tr>
			<th>Ingreso</th>
			<th>Salida</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($dato as $dat):?>
			<tr>
				<td><?php echo $dat['Movimiento']['ingreso'];?></td>
				<td><?php echo $dat['Movimiento']['salida'];?></td>
				<td><?php echo $dat['Movimiento']['total'];?></td>
				<td>
					<?php echo $this->Html->link('Editar',array('action'=>'editar',$dat['Movimiento']['id']));?>
					<?php echo $this->Html->link('Eliminar',array('action'=>'eliminar',$dat['Movimiento']['id']),array('escape'=>false,'confirm'=>'Esta seguro de eliminar'));?>
				</td>
			</tr>
		<?php endforeach;?>	
	</tbody>
</table>
<?php echo $this->Html->link('INSERTAR NUEVO MOVIMIENTO',array('action'=>'insertar'));?>
