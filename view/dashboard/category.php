<?php include 'partial/sidebar.php'; ?>

<div class="col">
    <div class="container">
    

            <h2>Añadir Categoria</h2>
            <div class="card card-body bg-light mt-4 mb-5">
            <form action="<?php echo URL; ?>dashboard/addCategory" method="POST">

                <div class="form-group">
                    <label for="title">Categoria: <sup>*</sup></label>
                    <input type="text" name="category" class="form-control form-control-lg" value="">
                </div>

                <input type="submit" class="btn btn-success" value="Añadir">
            </form>
            
        </div>
    </div>
</div>








