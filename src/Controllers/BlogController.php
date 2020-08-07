<?php

namespace ConfrariaWeb\Blog\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller {

    protected $data;

    public function __construct() {
        $this->data = [];
    }

    public function index() {
        //$this->data['accounts'] = resolve('AccountService')->all();
        return view(viewTemplate('index', 'blog'), $this->data);
    }

    public function create() {
        return view(viewTemplate('create', 'blog'));
    }

    public function store(Request $request) {
        $account = resolve('AccountService')->create($request->all());
        return redirect('admin.accounts.index')
                        ->with('status', $account ? 'Realizado com sucesso' : 'Opss! Algo aconteceu de errado');
    }

    public function show($id) {
        $data['account'] = resolve('AccountService')->find($id);
        return view(viewTemplate('show', 'blog'), $data);
    }

    public function edit($id) {
        $data['account'] = resolve('AccountService')->find($id);
        return view(viewTemplate('edit', 'blog'), $data);
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
