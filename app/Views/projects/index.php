
<?= $this->extend('layouts/base') ?>


<?= $this->section('content') ?>
    <section>

    <div class="header">
        <h3>All Projects</h3>
        <?php
            if(session()->getFlashdata('message')){
                echo "<button class='alert alert-success'>".session()->getFlashdata('message')."</button>";
            }
        ?>
        <a class="btn btn-primary float-end" href="<?= base_url('projects/add'); ?>">Add Project</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($projects as $project):?>
                <tr>
                    <td><?= $project['title'];?></td>
                    <td><?= $project['description'];?></td>
                    <td><?= $project['created_at'];?></td>
                    <td>
                        <a class="btn btn-sm btn-success" href="<?= base_url('projects/edit/'.$project['id']);?>">Edit Project</a>
                    </td>
                    <td>
                        <form action="<?= base_url('projects/delete/'.$project['id']);?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger" type="submit">Delete Project</a>
                        </form>
                    </td>               
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    </section>
<?= $this->endSection() ?>

