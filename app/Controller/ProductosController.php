<?php
class ProductosController extends AppController {
	public $components = array ('Paginator');
	public $uses = array ('Producto');
	public $layout = 'default';
	public function index() {
		$dato = $this->Producto->find ( 'all' );
		$this->set ( compact ( 'dato' ) );
	}
	public function insertar($id = null) {
		if (! empty ( $this->data )) {
			$this->Producto->create ();
			if ($this->Producto->saveAll ( $this->data )) {
				$this->Session->setFlash ( 'Los Datos fueron registrados con exito..!!!', 'default', array (
						'class' => 'success'
				) );
				$this->redirect ( array (
						'controller' => 'productos',
						'action' => 'index'
				) );
			} else {
				$this->Session->setFlash ( 'No se pudo resgistrar el producto' );
			}
		}
	}
	public function eliminar($id = null) {
		$this->Producto->id = $id;
		$this->data = $this->Producto->read ();
		if (! $id) {
			$this->Session->setFlash ( 'No existe el producto a eliminar' );
			$this->redirect ( array (
					'action' => 'index'
			) );
		} else {
			if ($this->Producto->delete ( $id )) {
				$this->Session->setFlash ( 'Se elimino el producto ' . $this->data ['Producto'] ['nombre'] );
				$this->redirect ( array (
						'action' => 'index'
				) );
			} else {
				$this->Session->setFlash ( 'Error al eliminar' );
			}
		}
	}
	public function editar($id = null) {
		$this->Producto->id = $id;
		if (! $id) {
			$this->Session->setFlash ( 'No existe tal registro' );
			$this->redirect ( array (
					'action' => 'index'
			), null, true );
		}
		if (empty ( $this->data )) {
			$this->data = $this->Producto->read ();
		} else {
			if ($this->Producto->save ( $this->data )) {
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