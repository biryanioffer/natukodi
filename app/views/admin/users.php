<div id="page-content">
    <!-- Table Styles Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>USERS</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>User Management</li>
                        <li><a href="">Users</a></li>
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
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>CITY</th>
                    <th>STATE</th>
                    <th style="width: 120px;">STATUS</th>
                    <th style="width: 120px;">CREATED ON</th>
                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td><strong>Sagar Raviprolu</strong></td>
                    <td>sagar@yahoo.com</td>
                    <td>Nellore</td>
                    <td>AP</td>
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
                    <td><strong>Subbu Pedagadi</strong></td>
                    <td>subbu@gmail.com</td>
                    <td>Hyderabad</td>
                    <td>TG</td>
                    <td><span class="label label-warning">In Active</span></td>
                    <td class="text-center">20/04/2016</td>
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

</div>