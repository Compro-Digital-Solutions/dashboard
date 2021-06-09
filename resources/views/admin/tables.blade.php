@extends('admin.app')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><div class="my-2"></div>
                  <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Add New</span>
                  </a>
                  <div class="my-2"></div>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>№</th>
                      <th>Office1</th>
                      <th>Office2</th>
                      <th>Office3</th>
                      <th>Office4</th>


                      <th>View</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
              
                  <tbody>
                    <!-- <-- New --- > -->
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td> <a href="#" class="btn btn-warning btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                            </a></td>
                      <td> 
                          <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                         </a>
                      </td>

                      <td> <a href="#" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                      </td>
                    </tr>

                      <!-- <-- New --- > -->
                      <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td> <a href="#" class="btn btn-warning btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                            </a></td>
                      <td> 
                          <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                         </a>
                      </td>

                      <td> <a href="#" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                      </td>
                    </tr>

                      <!-- <-- New --- > -->
                      <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td> <a href="#" class="btn btn-warning btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                            </a></td>
                      <td> 
                          <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                         </a>
                      </td>

                      <td> <a href="#" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                      </td>
                    </tr>

                      <!-- <-- New --- > -->
                      <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td> <a href="#" class="btn btn-warning btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                            </a></td>
                      <td> 
                          <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                         </a>
                      </td>

                      <td> <a href="#" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                      </td>
                    </tr>

                      <!-- <-- New --- > -->
                      <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td> <a href="#" class="btn btn-warning btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                            </a></td>
                      <td> 
                          <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                         </a>
                      </td>

                      <td> <a href="#" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                      </td>
                    </tr>

                      <!-- <-- New --- > -->
                      <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td> <a href="#" class="btn btn-warning btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                            </a></td>
                      <td> 
                          <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                         </a>
                      </td>

                      <td> <a href="#" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                      </td>
                    </tr>

                      <!-- <-- New --- > -->
                      <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td>Edinburgh</td>
                      <td> <a href="#" class="btn btn-warning btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                            </a></td>
                      <td> 
                          <a href="#" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-edit"></i>
                         </a>
                      </td>

                      <td> <a href="#" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                      </td>
                    </tr>
                    
                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection