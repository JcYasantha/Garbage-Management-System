<?= $this->include('partials/navbar') ?>
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            Create A Bin
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="Area">Area</label>
                    <input class="form-control" id="Area" placeholder="Enter the Area">
                </div>
                <div class="form-group">
                    <label for="Locality">Locality</label>
                    <input class="form-control" id="Locality" placeholder="Enter the Locality">
                </div>
                <div class="form-group">
                    <label for="City">City</label>
                    <input class="form-control" id="City" placeholder="Enter the City">
                </div>
                <div class="form-group">
                    <label for="BestRoute">Best Route</label>
                    <textarea class="form-control" rows="5" id="BestRoute"></textarea>
                </div>
                <div class="form-group">
                    <label for="Driver Name">Driver's Name</label>
                    <select id="js-example-basic-single" class="form-control" name="state">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
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