<?php
class MovimientosController extends AppController {
	public $components = array('Paginator');
	public $uses = array('Movimiento','Producto');
	
	public $layout = 'default';
	public function index(){
		$dato = $this->Movimiento->find('all');
		$this->set(compact('dato'));
	}
	public function insertar($id=null){
		if(!empty($this->data)){
			$this->Movimiento->create();
			if($this->Movimiento->saveAll($this->data)){
				$this->Session->setFlash('Los datos fueron registrados con exito...!!!','default',array('class'=>'success'));
				$this->redirect(array('controller'=>'movimientos','action'=>'index'));
			}else {
				$this->Session->setFlash('No se pudo registrar..!!!');
					
			}
		}
		$dato = $this->Producto->find ( 'list', array (
				'fields' => 'Producto.nombre'
		) );
		// print_r($dato);
		// die();
		$this->set ( compact ( 'dato' ) );
	}
	
	public function eliminar($id=null){
		$this->Movimiento->id=$id;
		$this->data = $this->Movimiento->read();
		if(!$id){
			$this->Session->setFlash('No existe el cliente a eliminar');
			$this->redirect(array('action'=>'index'));
		}else{
			if($this->Movimiento->delete($id)){
				$this->Session->setFlash('Se elimino al cliente'.$this->data['Movimiento']['nombre']);
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('Error al eliminar');
			}
		}
	}
	
	public function editar($id = null) {
		$this->Movimineto->id = $id;
		if (! $id) {
			$this->Session->setFlash ( 'No existe tal registro' );
			$this->redirect ( array (
					'action' => 'index'
			), null, true );
		}
		if (empty ( $this->data )) {
			$this->data = $this->Movimiento->read ();
		} else {
			if ($this->Movimiento->save ( $this->data )) {
				$this->Session->setFlash ( 'Los datos fueron modificados' );
				$this->redirect ( array (
						'action' => 'index'
				), null, true );
			} else {
				$this->Session->setFlash ( 'nose pudo modificar!!' );
			}
		}
	}
}