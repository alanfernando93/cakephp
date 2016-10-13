<h2>Listado de Productos</h2>
<div class="col-md-12">
	<table class="table table-striped">
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
						<?php echo $this->Html->link(__('Editar'),array('action'=>'editar',$dat['Producto']['id']),array('class'=>'btn btn-xs btn-default'));?>
						<?php echo $this->Html->link('Eliminar',array('action'=>'eliminar',$dat['Producto']['id']),array('class'=>'btn btn-xs btn-default','escape'=>false,'confirm'=>'Esta seguro de eliminar'));?>
					</td>
			</tr>
			<?php endforeach;?>	
		</tbody>
	</table>
</div>
