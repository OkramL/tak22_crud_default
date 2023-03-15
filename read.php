<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">
            <h3 class="text-center">Read - Search for a user by name</h3>
            <form action="read" method="POST" class="mb-2">
                <div class="row mb-2">
                    <label for="phrase" class="col-sm-2 form-label mt-2">Search phrase</label>
                    <div class="col">
                        <input type="text" name="phrase" value="<?php if(isset($_POST['phrase'])) { echo $_POST['phrase']; } ?>" id="phrase" onclick="clearField();" class="form-control" required placeholder="Name">
                    </div>
                    <div class="col-2">
                        <input type="submit" name="submit" value="Search result" class="btn btn-primary form-control">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-sm-2"></div>
    </div>
</div>
<script>
    // JavaScript function
</script>