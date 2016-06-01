<form id="form-validation" action="<?php echo base_url() ?>admin/create_category" method="post"
      class="form-horizontal form-bordered">
    <div class="form-group">
        <label class="col-md-3 control-label" for="val-category-name">Category Name <span
                class="text-danger">*</span></label>
        <div class="col-md-6">
            <input type="text" id="val-category-name" name="val-category-name" class="form-control"
                   placeholder="Enter new category name..">
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-md-8 col-md-offset-3">
            <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
        </div>
    </div>
</form>

<!-- Load and execute javascript code used only in this page -->
<script src="<?php echo site_url('app/assets/admin/js/pages/formsValidation.js') ?>"></script>
<script>$(function() { FormsValidation.init(); });</script>