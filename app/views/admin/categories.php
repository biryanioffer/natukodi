<div id="page-content">
    <!-- Table Styles Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Categories</h1>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#createModal"
                            title="Create new category">
                        <i class="fa fa-plus">Category</i></button>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Admin Management</li>
                        <li>Business Categories</li>
                        <li><a href="">Main Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Table Styles Header -->

    <!-- Datatables Block -->
    <!-- Datatables is initialized in js/pages/uiTables.js -->
    <div class="block full">
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                <thead>
                <tr>
                    <th class="text-right" style="width: 50px;">ID</th>
                    <th>CATEGORY NAME</th>
                    <th class="text-center" style="width: 120px;">STATUS</th>
                    <th style="width: 120px;">CREATED ON</th>
                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category) { ?>
                <tr>
                    <td class="text-right"><?php echo $category->category_id; ?></td>
                    <td><strong><?php echo $category->category_name; ?></strong></td>
                    <td class="text-center">
                        <?php if($category->status) {
                            ?>
                            <span class="label label-success">Active</span>
                            <?php
                        } else { ?>
                            <span class="label label-warning">In Active</span>
                        <?php
                        }
                        ?>
                    </td>
                    <td class="text-center"><?php echo $category->created_date; ?></td>
                    <td class="text-center">
                        <!--<button type="button" class="btn btn-effect-ripple btn-xs btn-success" data-toggle="modal" data-target="#editModal"
                                title="Edit Category"><i class="fa fa-pencil"></i></button>-->
                        <a href="get_category" data-toggle="tooltip" title="Edit Category"
                           class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete Category"
                           class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Block -->
    <!-- Create Modal -->
    <div id="createModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create</h4>
                </div>
                <div class="modal-body">
                    <?php include 'create_category.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Block -->

    <!-- Edit Modal -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create</h4>
                </div>
                <div class="modal-body">
                    <?php include 'edit_category.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Block -->
</div>