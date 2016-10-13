<?php
class ClientesController extends AppController {
	public $components = array (
			'Paginator' 
	);
	public $uses = array (
			'Cliente',
			'Cuidade' 
	);
	public $layout = 'default';
	public function index() {
		$dato = $this->Cliente->find ( 'all' );
		$this->set ( compact ( 'dato' ) );
	}
	public function insertar($id = null) {
		if (! empty ( $this->data )) {
			$this->Cliente->create ();
			if ($this->Cliente->saveAll ( $this->data )) {
				$this->Session->setFlash ( 'Los Datos fueron registrados con exito..!!!', 'default', array (
						'class' => 'success' 
				) );
				$this->redirect ( array (
						'controller' => 'clientes',
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( 'No se pudo resgistrar al cliente' );
			}
		}
		$dato = $this->Cuidade->find ( 'list', array (
				'fields' => 'Cuidade.nombre' 
		) );
		// print_r($dato);
		// die();
		$this->set ( compact ( 'dato' ) );
	}
	public function eliminar($id = null) {
		$this->Cliente->id = $id;
		$this->data = $this->Cliente->read ();
		if (! $id) {
			$this->Session->setFlash ( 'No existe el cliente a eliminar' );
			$this->redirect ( array (
					'action' => 'index' 
			) );
		} else {
			if ($this->Cliente->delete ( $id )) {
				$this->Session->setFlash ( 'Se elimino al cliente ' . $this->data ['Cliente'] ['nombre'] );
				$this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( 'Error al eliminar' );
			}
		}
	}
	public function editar($id = null) {
		$this->Cliente->id = $id;
		if (! $id) {
			$this->Session->setFlash ( 'No existe tal registro' );
			$this->redirect ( array (
					'action' => 'index' 
			), null, true );
		}
		if (empty ( $this->data )) {
			$this->data = $this->Cliente->read ();
		} else {
			if ($this->Cliente->save ( $this->data )) {
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