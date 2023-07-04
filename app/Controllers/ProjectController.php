<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class ProjectController extends BaseController
{
    public function index()
    {
        $projects = new ProjectModel();
        $data['projects'] = $projects->findAll();
        return view('projects/index.php', $data);
    }

    public function addProject()
    {
        return view('projects/add.php');
    }

    public function storeProject()
    {
        // echo "<pre>";
        // print_r($this->request->getPost());
        // print_r($this->request->getGet());
        // exit;
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $project = new ProjectModel();
        $project->save($data);

        // return redirect()->route('projects/add');
        return redirect()->to(base_url('projects'))->with('message', 'Project added successsfully');

    }

    public function editProject($id)
    {
        $projectModel = new ProjectModel();
        $data['project'] = $projectModel->find($id);
        return view('projects/edit', $data);
        
    }

    public function updateProject($id)
    {
        // echo "<pre>";
        // echo $id;
        // print_r($this->request->getPost());
        // exit;
        $project = new ProjectModel();
        
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];
        $project->update($id, $data);
        return redirect()->to(base_url('projects'))->with('message', 'Project updated successsfully');

    }

    public function deleteProject($id)
    {
        $project = new ProjectModel();
        $project->delete($id);
        return redirect()->to(base_url('projects'))->with('message', 'Project deleted successsfully');
    }
}
