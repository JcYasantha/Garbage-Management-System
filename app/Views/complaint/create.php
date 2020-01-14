<?= $this->include('partials/navbar') ?>
<div class="container my-5">
    <div class="card my-5">
        <div class="card-header">
            Add a Complaint
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="Driver Name">Place</label>
                    <select id="js-example-basic-single" class="form-control" name="destination">
                        <?php if (! empty($places) && is_array($places)) : ?>
                        <?php foreach ($places as $place): ?>
                        <option value="<?= $place['id'] ?>"><?= $place['destination'] ?></option>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <option value="no">No places</option>
                        <?php endif ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="complaint">Complaint</label>
                    <textarea class="form-control" rows="5" name="complaint" id="complaint"></textarea>
                    <span class="text-danger"><?= \Config\Services::validation()->geterror('complaint'); ?></span>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
<?= $this->include('partials/footer') ?>
<script>
$(document).ready(function() {
    $('#js-example-basic-single').select2();
});
</script>