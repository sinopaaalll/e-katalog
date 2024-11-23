<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('product') ?>" class="btn btn-icon"> <i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <!-- <div class="alert alert-danger">asas</div> -->
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" id="name" class="form-control <?= form_error('name') ? "is-invalid" : "" ?> " autofocus>
                                    <?= form_error('name', '<div class="invalid-feedback">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" id="price" class="form-control <?= form_error('price') ? "is-invalid" : "" ?>">
                                    <?= form_error('price', '<div class="invalid-feedback">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control <?= form_error('status') ? "is-invalid" : "" ?>">
                                        <option value="0" selected disabled>Select Status</option>
                                        <option value="1">Ready</option>
                                        <option value="2">Not Available</option>

                                    </select>
                                    <?= form_error('status', '<div class="invalid-feedback">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control <?= form_error('category') ? "is-invalid" : "" ?>">
                                        <option value="0" selected disabled>Select Category</option>
                                        <?php foreach ($categories as $category) { ?>
                                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('category', '<div class="invalid-feedback">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea name="desc" id="desc" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</div>