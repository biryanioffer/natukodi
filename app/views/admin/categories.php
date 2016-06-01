<div id="page-content">
    <!-- Table Styles Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>MAIN CATEGORIES</h1>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"
                            title="Create new category">
                        <i class="fa fa-plus">Category</i></button>
                    <!--<a data-target="#myModal" data-toggle="tooltip" title="Add Administrator" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-plus"></i></a>-->
                </div>
            </div>
           <!-- <div class="col-sm-6 pull-left">
                <a href="page_ready_register.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip"
                   data-placement="left" title="Create new category"><i class="fa fa-plus"></i></a>
            </div>-->
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
                    <th class="text-center" style="width: 50px;">ID</th>
                    <th>CATEGORY NAME</th>
                    <th style="width: 120px;">STATUS</th>
                    <th style="width: 120px;">CREATED ON</th>
                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td><strong>Clothing</strong></td>
                    <td><span class="label label-warning">In Active</span></td>
                    <td class="text-center">23/04/2016</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User"
                           class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User"
                           class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td><strong>Furniture</strong></td>
                    <td><span class="label label-warning">In Active</span></td>
                    <td class="text-center">20/04/2016</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User"
                           class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User"
                           class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td><strong>Bicycles</strong></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center">13/03/2016</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User"
                           class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User"
                           class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td><strong>Books</strong></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center">23/04/2016</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User"
                           class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User"
                           class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td><strong>Footware</strong></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center">23/04/2016</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User"
                           class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User"
                           class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Block -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create</h4>
                </div>
                <div class="modal-body">
                    <?php include 'category.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Block -->
</div>