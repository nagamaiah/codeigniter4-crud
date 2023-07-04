
<?= $this->extend('layouts/base') ?>


<?= $this->section('content') ?>
    <section>
        <div class="container">
            <h3>Add Project</h3>

            <form action="<?= base_url('projects/store')?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Project Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Project Description</label>
                    <input name="description" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>

        </div>

    </section>
<?= $this->endSection() ?>

