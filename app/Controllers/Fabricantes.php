<?php

namespace App\Controllers;

class Fabricantes extends BaseController
{
    public function index()
    {
        $data['titulo'] = "Gerenciar Fabricantes";
        return view('fabricantes_index', $data);
    }

    public function detalhes($id)
    {
        $data['id'] = $id;
        $data['titulo'] = 'Fabricante ' . $id;
        return view('fabricantes_detalhes', $data);
    }

    public function inserir()
    {
        $data['titulo'] = 'Inserir novo fabricante';
        $data['acao'] = 'Inserir';
        $data['msg'] = '';

        echo $this->request->getMethod();

        if ($this->request->getMethod() === 'post') {

            $fabricanteModel = new \app\Models\FabricantesModel();
            $fabricanteModel->set('nomefabricante', $this->request->getPost('nomefabricante'));

            if ($fabricanteModel->insert()) {
                //deu certo
                $data['msg'] = 'Categoria inserida com sucesso';
            } else {
                //deu errado
                $data['msg'] = 'Erro ao inserir categoria';
            }
        }

        return View('fabricantes_form', $data);
    }
}
