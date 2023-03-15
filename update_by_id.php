<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <h3 class="text-center">Update - Change record</h3>

            <form action="update" method="post">
                <div class="row mb-2">
                    <label for="name" class="col-sm-2 form-label mt-1">Name</label>
                    <div class="col">
                        <input type="text" name="name" value="" id="name" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="birth" class="col-sm-2 form-label mt-1">Birth</label>
                    <div class="col">
                        <input type="date" name="birth" value="" id="birth" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="salary" class="col-sm-2 form-label mt-1">Salary</label>
                    <div class="col">
                        <input type="number" name="salary" value="" id="salary" min="0" max="9999" step="1" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="height" class="col-sm-2 form-label mt-1">Height</label>
                    <div class="col">
                        <input type="number" name="height" value="" id="height" min="0.00" max="2.72" step="0.01" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <input type="hidden" name="sid" value="">
                        <input type="submit" name="submit" value="Change person" class="btn btn-warning form-control">                        
                    </div>
                    <div class="col">
                        <button type="reset" class="btn btn-info form-control">Reset form</button>
                    </div>

                </div>

            </form>
        </div>

        <div class="col-sm-2"></div>
    </div>
</div>