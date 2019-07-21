<div class="container">
    <h3 class="mt-3">List of Peoples</h3>
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="<?= base_url('peoples'); ?>">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword" name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit" id="button-addon2"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-10">
            <h5>Result : <?= $total_rows; ?> </h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (empty($peoples)) : ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    Data not found
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php
                    foreach ($peoples as $people) :  ?>
                        <tr>
                            <th> <?= ++$start; ?> </th>
                            <td> <?= $people['name']; ?> </td>
                            <td> <?= $people['email']; ?> </td>
                            <td>
                                <a href="" class="badge badge-sm badge-primary">Detail</a>
                                <a href="" class="badge badge-sm badge-success">Edit</a>
                                <a href="" class="badge badge-sm badge-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>

        </div>
    </div>
</div>