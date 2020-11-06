<?php

namespace ConfrariaWeb\File\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller {

    protected $data;

    public function __construct() {
        $this->data = [];
    }

    public function index() {
        //$this->data['accounts'] = resolve('AccountService')->all();
        return view(viewTemplate('index', 'file'), $this->data);
    }

    public function create() {
        return view(viewTemplate('create', 'file'));
    }

    public function store(Request $request) {
        $account = resolve('AccountService')->create($request->all());
        return redirect('admin.accounts.index')
                        ->with('status', $account ? 'Realizado com sucesso' : 'Opss! Algo aconteceu de errado');
    }

    public function show($id) {
        $data['account'] = resolve('AccountService')->find($id);
        return view(viewTemplate('show', 'file'), $data);
    }

    public function edit($id) {
        $data['account'] = resolve('AccountService')->find($id);
        return view(viewTemplate('edit', 'file'), $data);
    }

    public function update(Request $request, $id) {
        $account = resolve('AccountService')->update($request->all(), $id);
        return redirect('admin.accounts.index')
                        ->with('status', $account ? 'Realizado com sucesso' : 'Opss! Algo aconteceu de errado');
    }

    public function destroy($id) {
        $account = resolve('AccountService')->destroy($id);
        return redirect('admin.accounts.index')
                        ->with('status', $account ? 'Realizado com sucesso' : 'Opss! Algo aconteceu de errado');
    }

}
