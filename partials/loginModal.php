<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to Jerry Codding</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forums/partials/handlelogin.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail">Username</label>
                        <input type="text" class="form-control" id="loginEmail" name="loginEmail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="loginpass">Password</label>
                        <input type="password" class="form-control" id="loginpass" name="loginpass">
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>