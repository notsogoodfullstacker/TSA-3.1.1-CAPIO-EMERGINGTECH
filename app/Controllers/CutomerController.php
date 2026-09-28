<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class CustomerController extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();
        return view('customers/index', $data);
    }

    public function new()
    {
        return view('customers/create');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            return view('customers/create', ['validation' => $this->validator]);
        }

        $customerModel = new CustomerModel();
        $customerModel->save([
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
        ]);

        return redirect()->to('/customers')->with('success', 'Customer added successfully!');
    }

    public function edit($id = null)
    {
        $customerModel = new CustomerModel();
        $data['customer'] = $customerModel->find($id);

        if (empty($data['customer'])) {
            throw PageNotFoundException::forPageNotFound("Customer with ID $id not found");
        }

        return view('customers/edit', $data);
    }

    public function update($id = null)
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $customerModel = new CustomerModel();
        $customerModel->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
        ]);

        return redirect()->to('/customers')->with('success', 'Customer updated successfully!');
    }
}