<?php
// updated
namespace App\Controllers;
use App\Models\crudmodel;

class crud extends BaseController
{
    public function index()
    {
        $details = new crudmodel();
        $data['details']=$details->findAll();
        return view('index',$data);
        // ->with($data);
    }
    public function add()
    {
        $details = new crudmodel();
        $data = [

            'name' =>$this->request->getPost('name'),
            'roll' =>$this->request->getPost('roll'),
        ];
        $details->save($data);
        return redirect('crud');
    }
    public function edit($id = null)
    {


        $details = new crudmodel();
        $data['details']=$details->find($id);
        return view('edit',$data);
      
    }
    public function remove($id = null)
    {


        $details = new crudmodel();
        $data['details']=$details->where('id',$id)->delete($id);
       
        return redirect('crud');

      
    }
    public function update()
    {


        $details = new crudmodel();
        $id=$this->request->getPost('id');
        $data=[
            "name"=>$this->request->getPost('name'),
            "roll"=>$this->request->getPost('roll'),

        ];
       
        $details->update($id, $data);



        return redirect('crud');
      
    }
}
