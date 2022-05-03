<?php include 'partial/sidebar.php'; ?>

    <div class="col">
        <div class="container">
            <!-- Breadcrumbs-->
            <h2>Tus Publicaciones</h2>

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
                    <?php if(empty($this->allPosts)): ?>
                        <p>Aún no se ha enviado ninguna publicación</p>
                    <?php else : ?>
                        <?php foreach($this->allPosts as $post) : ?>
                            <tr>
                                <td><?= $post->header ?></td>
                                <td><?= $post->category_name ?></td>
                                <td><?= $post->firstname . ' ' . $post->lastname?></td>
                                <td><a href="<?= URL; ?>dashboard/view/<?= $post->id; ?>" class="btn btn-dark">Ver</a></td>
                                <td><a href="<?= URL; ?>dashboard/edit/<?= $post->id; ?>" class="btn btn-primary">Editar</a></td>
                                <td><a href="<?= URL; ?>dashboard/delete/<?= $post->id; ?>" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



                



    