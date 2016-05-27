<div id="page-content">
    <!-- Table Styles Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>MERCHANT NOTIFICATIONS</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Merchant Management</li>
                        <li><a href="">Merchant Notifications</a></li>
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
                    <th class="text-center" style="width: 50px;">MERCHANT ID</th>
                    <th>MERCHANT NAME</th>
                    <th>SENDER</th>
                    <th>SUBJECT</th>
                    <th>IS READ</th>
                    <th>RECEIVED ON</th>
                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Chandana Bros</td>
                    <td>Mr. Kedarnath</td>
                    <td>Discount Expired before date</td>
                    <td>NO</td>
                    <td>20/05/2016</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit User"
                           class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete User"
                           class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Chandana Bros</td>
                    <td>Mr. Anand</td>
                    <td>Cannot find location</td>
                    <td>YES</td>
                    <td>25/05/2016</td>
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