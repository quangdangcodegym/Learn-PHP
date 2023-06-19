@extends('layout.app')
@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard </a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                @isset($message)
                    <script>
                        window.onload = ()=>{
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        }
                    </script>
                @endisset
                
                <form class="form-horizontal col-6 offset-3" id="usrform" method="POST" action="{{ route('articles.store')}}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-10">
                            <input type="text" name='title' class="form-control" value= '{{ old('title')}}' value="Some text value...">
                            @if ($errors->has('title'))
                                @foreach ($errors->get('title') as $e)
                                    <div><label style="color: red">{{ $e}}</label></div>
                                @endforeach
                            @endif
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 control-label" >Short intro</label>
                        <div class="col-md-10">
                            <input type="text" value='{{ old('short_intro')}}' class="form-control" name="short_intro">
                            
                            @error('short_intro')
                                <div><label style="color: red">{{ $errors->first('short_intro')}}</label></div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 control-label" >Slug</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="slug">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 control-label">Category</label>
                        <div class="col-md-10">
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $cate)
                                    <option value="{{$cate->id}}">{{ $cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 control-label">Author</label>
                        <div class="col-md-10">
                            <select class="form-control" name="author_id">
                                @foreach ($authors as $author)
                                    <option value="{{$author->id}}">{{ $author->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 control-label">Content</label>
                        <div class="col-md-10">
                            <textarea form="usrform" name="content" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10 offset-2">
                            <button class="btn btn-primary">Create</button>
                        </div>
                    </div>

                </form>

            </div>
            <!-- end row -->


        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->

    

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2018 - 2020 &copy; Zircos theme by <a href="">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection