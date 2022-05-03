<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar negativeMargin">
        <div class="fixed-left">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Panel de Control</span>
                <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/editProfile"><span data-feather="file-text"></span>Editar Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= URL ?>dashboard/view"><span data-feather="file-text"></span>Ver Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= URL ?>dashboard/allUserPosts"><span data-feather="file-text"></span>Tus Publicaciones</a>
                </li>
                <?php if(Session::get('user')['permission'] == "Admin") :?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/add"><span data-feather="file-text"></span>Añadir Publiciación</a>
                </li>
                
                <!-- <li class="nav-item">
                <a href="view/dashboard/imprimir.php"  type="submit" value="Imprimir" name="submit" class="btn btn-primary">Imprimir</a>
                </li> -->
                <?php endif; ?>
            </ul>

            <?php if(Session::get('user')['permission'] == "Admin") : ?>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Funciones Admin</span>
                <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/category"><span data-feather="file-text"></span>Añadir Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/allUsers"><span data-feather="file-text"></span>Gestión de Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/"><span data-feather="file-text"></span>Imprimir Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/"><span data-feather="file-text"></span>Exportar Excel</a>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </nav>

    <div class="col-md-2"></div>



    
