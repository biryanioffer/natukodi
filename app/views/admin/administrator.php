<form id="form-validation" action="administrator.php" method="post" class="form-horizontal form-bordered">
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-skill">Title <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <select id="val-title" name="val-title" class="form-control">
                <option value="Mr.">Mr.</option>
                <option value="Miss">Miss</option>
                <option value="Ms.">Ms.</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-username">First name <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="val-firstname" name="val-firstname" class="form-control" placeholder="Enter your first name..">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-lastname">Last name <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="val-lastname" name="val-lastname" class="form-control" placeholder="Enter your last name..">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="val-email">Email <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="val-email" name="val-email" class="form-control" placeholder="Enter your valid email..">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-username">Username <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="val-username" name="val-username" class="form-control" placeholder="Choose a nice username..">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-password">Password <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="password" id="val-password" name="val-password" class="form-control" placeholder="Choose a good one..">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="password" id="val-confirm-password" name="val-confirm-password" class="form-control" placeholder="..and confirm it to be safe!">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-skill">Role <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <select id="val-skill" name="val-skill" class="form-control">
                <option value="">Please select</option>
                <option value="super_admin">Super Admin</option>
                <option value="admin">Admin</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-phone">Contact Number <span class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="val-phone" name="val-phone" class="form-control" placeholder="970 368 4024">
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-md-8 col-md-offset-3">
            <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
        </div>
    </div>
</form>

<script src="js/pages/formsValidation.js"></script>
<script>$(function() { FormsValidation.init(); });</script>