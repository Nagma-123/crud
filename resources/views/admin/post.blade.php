<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin/includes/header')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin/includes/sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin/includes/nav')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <form id="search_post" method="POST" action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <label>Search:</label>
                            <input type="text" class="form-control" name="search" value="">      
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <button onclick="window.location.href='{{ route('add_post')}}'" style="float: right;" class="btn btn-primary" type="submit">Add Post</button>
                <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Caption</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>
                      <th>Caption</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td><img style="height:100px;width:100px;" src="{{ $post->image }}"></td>
                    <td>{{ $post->caption }}</td>
                    <td>
                      <button onclick="window.location.href='{{url('/').'/edit_post/'.$post->id}}'" type="submit" class="btn btn-warning">Edit</button>
                      <button type="submit" class="btn btn-success">Active</button>
                      {{-- <button onclick="window.location.href='{{ url('/').'/delete_post/'.$post->id }}'" type="submit" class="btn btn-danger">Delete</button> --}}
                      {{-- @method('DELETE') --}}
                      <a href="{{ route('delete_post',$post->id)}}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
                <div class="row" style="float:right;">
                    <div class="col-12 d-flex">
                      {{ $posts->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('admin/includes/footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- footer script -->
  @include('admin/includes/footer_script')
  <!-- end footer script -->

</body>

</html>
