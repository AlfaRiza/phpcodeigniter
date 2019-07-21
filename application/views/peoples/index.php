<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <h3>List of Peoples</h3>

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