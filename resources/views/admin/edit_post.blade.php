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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <form id="edit_post_form" method="POST" action="/update_post/{{$id->id}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="caption">Post Caption</label>
                <input type="text" class="form-control" id="caption" name="caption" placeholder="" value="{{ $id->caption }}">
                @if($errors->has('caption'))
                  <strong>{{ $errors->first('caption') }}</strong>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Post Image</label>
                <input type="file" class="form-control-file" id="image" name="image" placeholder="" value="{{ $id->image }}">
                @if($errors->has('image'))
                  <strong>{{ $errors->first('image') }}</strong>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Add New Post</button>
          </form>

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
