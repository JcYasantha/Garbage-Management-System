<?= $this->include('partials/navbar') ?>
<div class="container my-5">
    <a type="button" href="<?php echo base_url(); ?>/complaint/create" class="btn btn-primary mb-2 float-right">Create</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Place</th>
                <th scope="col">Complaint</th>
                <th scope="col">Added By</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($complaints as $complaint) : ?>
            <tr>
                <th><?= $complaint['place'] ?></th>
                <td><?= $complaint['complaint'] ?></td>
                <td><?= $complaint['email'] ?></td>
                <td>Otto</td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->include('partials/footer') ?>