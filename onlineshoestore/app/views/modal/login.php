<!-- Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login_modal_label">Login Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div id="alert_place_holder"></div>
            <div class="form-group">
                <label for="username_email">Enter Username or Email</label>
                <input type="text" class="form-control" name="username_email" id="username_email" placeholder="Username or Email">
            </div>
            <div class="form-group">
                <label for="password">Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-block" onclick="login()">Login</button>
      </div>
    </div>
  </div>
</div>