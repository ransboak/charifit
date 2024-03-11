@extends('backend.main')
@section('content')
    <head>
        <!-- Plugins css -->


    </head>

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Donations</h4>

                                    @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                    </div>
                                    @endif
                                    @if (session('error'))
                                    <div class="alert alert-warning" role="alert">
                                        {{session('error')}}
                                    </div>
                                    @endif
                                    @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li><div class="alert alert-danger" role="alert">
                                                {{$error}}
                                            </div></li>
                                        @endforeach
                                    </ul>
                                @endif

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Donations</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-bottom: 1rem">Organize Donation</button>

                                        <div class="table-rep-plugin">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Organizer</th>
                                                    <th>Title</th>
                                                    <th>Category</th>
                                                    <th>Description</th>
                                                    <th>Goal</th>
                                                    <th>Current</th>
                                                    <th>Date</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                    @foreach ($blogs as $blog )


                                                <tr>
                                                    <td>{{$blog->user->firstname}} {{$blog->user->lastname}}</td>
                                                    <td>{{$blog->title}}</td>
                                                    <td>{{substr(strip_tags($blog->body), 0, 30)}}...</td>
                                                    <td>{{$blog->category}}</td>
                                                    <td>
                                                        @if ($blog->video_link)
                                                        {{$blog->video_link}}
                                                        @else
                                                        Null
                                                        @endif
                                                    </td>
                                                    <td>{{\Carbon\Carbon::parse($blog->created_at)->format('jS F, Y (H:i)')}}</td>
                                                    <td><i class="bx bx-pencil" data-toggle="modal" data-target=".editModal{{$blog->id}}" style="color: blue"></i> <i class="bx bx-trash" style="color: red"></i></td>
                                                </tr>

                                                <div class="modal fade editModal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="padding: 1rem">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Blog</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form  action="{{route('addBlog')}}" class="modal-body" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                     <input type="text" class="form-control" name="title" id="title" value="{{$blog->title}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Category</label>
                                                                        <select class="form-control" name="category" id="category">
                                                                            <option >Select</option>
                                                                            <option value="health" {{$blog->category == 'health' ? 'selected' : ''}}>Health</option>
                                                                            <option value="family" {{$blog->category == 'family' ? 'selected' : ''}}>Family</option>
                                                                        </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Thumbnail</label>
                                                                    <input type="file" class="dropify" id="thumbnail" name="thumbnail"/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Body</label>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Video Link</label>
                                                                    <input type="text" class="form-control" name="video_link" id="video_link" value="{{$blog->video_link}}">
                                                                </div>

                                                                <button type="submit" class="btn btn-primary waves-effect waves-light" >Create Post</button>
                                                            </form>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                @endforeach
                                                </tbody>
                                            </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Create Activity</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form  action="{{route('addActivity')}}" class="modal-body" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                     <input type="text" class="form-control" name="title" id="title">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option >Select</option>
                                            <option value="health">Health</option>
                                            <option value="family">Family</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <input type="file" class="dropify" id="thumbnail" name="thumbnail" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="summernote" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Goal</label>
                                     <input type="number" class="form-control" name="goal" id="goal">
                                </div>
                                <div class="form-group">
                                    <label>Video Link</label>
                                    <input type="text" class="form-control" name="video_link" id="video_link">
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light" >Create Post</button>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div>


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Ransboak.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Ransboak
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <script src="{{asset('assets1/js/vendor.min.js')}}"></script>


        <!-- Plugins js -->
        <script src="{{asset('assets1/libs/dropify/dropify.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{asset('assets1/js/pages/form-fileuploads.init.js')}}"></script>

        <!-- Summernote js -->
        <script src="{{asset('assets1/libs/summernote/summernote-bs4.min.js')}}"></script>

        <!-- email summernote init -->
        <script src="{{asset('assets1/js/pages/email-summernote.init.js')}}"></script>

        <!-- App js -->



{{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
<script>
    $('#summernote').summernote({
      placeholder: 'Body...',
      tabsize: 2,
      height: 200
    });
  </script>
 @endsection
