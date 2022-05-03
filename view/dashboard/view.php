<?php include 'partial/sidebar.php'; ?>

    <div class="col">
        <div class="container">
            <!-- Breadcrumbs-->
            <h2>Panel de Control</h2>

            <!-- DataTables Example -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Autor</th>
                            <th colspan="3">Opciones de publicación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->posts as $post) : ?>
                        <tr>
                            <td><?= $post->header ?></td>
                            <td><?= $post->category_name ?></td>
                            <td><?= $post->firstname . ' ' . $post->lastname?></td>
                            <?php if(Session::get('user')['permission'] == "Admin"): ?>
                                <td><a href="<?= URL; ?>category/show/<?= $post->id; ?>" class="btn btn-dark">Ver</a></td>
                                <td><a href="<?= URL; ?>dashboard/edit/<?= $post->id; ?>" class="btn btn-primary">Editar</a></td>
                                <td><a href="<?= URL; ?>dashboard/delete/<?= $post->id; ?>" class="btn btn-danger">Eliminar</a></td>
                            <?php elseif(Session::get('user')['permission'] == "Editor"): ?>
                                <td><a href="<?= URL; ?>category/show/<?= $post->id; ?>" class="btn btn-dark">Ver</a></td>
                                <td><a href="<?= URL; ?>dashboard/edit/<?= $post->id; ?>" class="btn btn-primary">Editar</a></td>   
                            <?php elseif(Session::get('user')['permission'] == "Guest"): ?>
                                <td><a href="<?= URL; ?>category/show/<?= $post->id; ?>" class="btn btn-dark">Ver</a></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



                



    