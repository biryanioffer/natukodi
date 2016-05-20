<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>SUB CATEGORY</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Admin Management</li>
                                            <li>Business Categories</li>
                                            <li>Sub Categories</li>
                                            <li><a href="">Create</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Validation Header -->

                        <!-- Form Validation Content -->
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                                <!-- Form Validation Block -->
                                <div class="block">
                                    <!-- Form Validation Title -->
                                    <div class="block-title">
                                        <h2>CREATE</h2>
                                    </div>
                                    <!-- END Form Validation Title -->

                                    <!-- Form Validation Form -->
                                    <form id="form-validation" action="page_forms_validation.html" method="post" class="form-horizontal form-bordered">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="val-category">Main Category <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <select id="val-category" name="val-category" class="form-control">
                                                    <option value="">Please select</option>
                                                    <option value="1">Clothing</option>
                                                    <option value="2">Books</option>
                                                    <option value="3">Furniture</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="val-categoryname">Sub Category Name <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" id="val-categoryname" name="val-categoryname" class="form-control" placeholder="Enter new sub category name..">
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-8 col-md-offset-3">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Form Validation Form -->
                                </div>
                                <!-- END Form Validation Block -->
                            </div>
                        </div>
                        <!-- END Form Validation Content -->
                    </div>