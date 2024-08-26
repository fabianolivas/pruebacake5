<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empresas Controller
 *
 * @property \App\Model\Table\EmpresasTable $Empresas
 */
class EmpresasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Empresas->find()
            ->contain(['Categoriaempresas']);
        $empresas = $this->paginate($query);

        $this->set(compact('empresas'));
    }

    /**
     * View method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresa = $this->Empresas->get($id, contain: ['Categoriaempresas', 'Opcionesrecargas', 'Identificadorcobros', 'Mediopagos', 'Recaudadoras', 'Servicios', 'CargoPorServicios', 'Cedulas', 'Cedulascitis', 'Cobros', 'ComisionesEmpresas', 'ComisionesRecaudadoras', 'Contadores', 'Cuentas', 'Empleados', 'Historicocobros', 'Intranetrankings', 'LogWsExt', 'Oficinas', 'Pagos', 'Pagosbk', 'Promociones', 'QueueConfigurations', 'Recargas', 'Seguros']);
        $this->set(compact('empresa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresa = $this->Empresas->newEmptyEntity();
        if ($this->request->is('post')) {
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->getData());
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('The empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresa could not be saved. Please, try again.'));
        }
        $categoriaempresas = $this->Empresas->Categoriaempresas->find('list', limit: 200)->all();
        $opcionesrecargas = $this->Empresas->Opcionesrecargas->find('list', limit: 200)->all();
        $identificadorcobros = $this->Empresas->Identificadorcobros->find('list', limit: 200)->all();
        $mediopagos = $this->Empresas->Mediopagos->find('list', limit: 200)->all();
        $recaudadoras = $this->Empresas->Recaudadoras->find('list', limit: 200)->all();
        $servicios = $this->Empresas->Servicios->find('list', limit: 200)->all();
        $this->set(compact('empresa', 'categoriaempresas', 'opcionesrecargas', 'identificadorcobros', 'mediopagos', 'recaudadoras', 'servicios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresa = $this->Empresas->get($id, contain: ['Opcionesrecargas', 'Identificadorcobros', 'Mediopagos', 'Recaudadoras', 'Servicios']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->getData());
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('The empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresa could not be saved. Please, try again.'));
        }
        $categoriaempresas = $this->Empresas->Categoriaempresas->find('list', limit: 200)->all();
        $opcionesrecargas = $this->Empresas->Opcionesrecargas->find('list', limit: 200)->all();
        $identificadorcobros = $this->Empresas->Identificadorcobros->find('list', limit: 200)->all();
        $mediopagos = $this->Empresas->Mediopagos->find('list', limit: 200)->all();
        $recaudadoras = $this->Empresas->Recaudadoras->find('list', limit: 200)->all();
        $servicios = $this->Empresas->Servicios->find('list', limit: 200)->all();
        $this->set(compact('empresa', 'categoriaempresas', 'opcionesrecargas', 'identificadorcobros', 'mediopagos', 'recaudadoras', 'servicios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresa = $this->Empresas->get($id);
        if ($this->Empresas->delete($empresa)) {
            $this->Flash->success(__('The empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
