<?php
namespace App\Controllers;
use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $model = new CrudModel();
        $data['details'] = $model->findAll();
        return view('index', $data);   
    }
    
    public function add()
    {
        $model = new CrudModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'roll' => $this->request->getPost('roll')
        ];
        $model->save($data);
        return redirect()->to('/crud');
    }
    
    public function edit($id = null)
    {
        $model = new CrudModel();
        $data['details'] = $model->find($id);
        return view('edit', $data);    
    }
    
    public function remove($id = null)
    {
        $model = new CrudModel();
        $model->delete($id);
        return redirect()->to('/crud');
    }
    
    public function update()
    {
        $model = new CrudModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'roll' => $this->request->getPost('roll')
        ];
        $model->update($id, $data);
        return redirect()->to('/crud');
    }
}
