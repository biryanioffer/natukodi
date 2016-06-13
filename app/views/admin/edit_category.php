<form id="oc-form" action="update_category" method="post"
      class="form-horizontal form-bordered">
    <div class="form-group">
        <label class="col-md-3 control-label" for="category-id">Category ID <span
                class="text-danger"></span></label>
        <div class="col-md-6">
            <input type="text" id="category-id" name="category-id" class="form-control"
                   readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="category-name">Category Name <span
                class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="category-name" name="category-name" class="form-control"
                   placeholder="Enter category name..">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="category-status">Status <span
                class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="category-status" name="category-status" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="created-date">Create On <span
                class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="created-date" name="created-date" class="form-control" readonly>
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-md-8 col-md-offset-3">
            <button type="submit" class="btn btn-effect-ripple btn-primary">Update</button>
            <button type="reset" class="btn btn-effect-ripple btn-danger">Cancel</button>
        </div>
    </div>
</form>