@extends("admin_dashboard.layouts.app")

@section("style")
<link href="{{asset('admin_dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin_dashboard/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
<link href="{{asset('admin_dashboard/plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />

<script src="https://cdn.tiny.cloud/1/049cbc9th46j9z79vcr32zy3h680sweynpzmfkosfv1fdx2o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Post</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Post</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Editar post: {{$post->title}}</h5>
                <hr />
                <form action="{{route('sediadministrador.posts.update', $post)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Titulo del post</label>
                                        <input type="text" name="title" value='{{old("title", $post->title)}}' class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                        @error('title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Subtitulo del post</label>
                                        <input type="text" name="slug"  value='{{old("slug", $post->slug)}}' class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                        @error('slug'),
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Post extracto</label>
                                        <textarea class="form-control"   name="excerpt" id="inputProductDescription" rows="3">{{old("excerpt", $post->excerpt)}}</textarea>
                                        @error('excerpt')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Post categoria</label>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="border p-3 rounded">
                                                    <div class="mb-3">
                                                        <label class="form-label"></label>
                                                        <select name="category_id" class="single-select">
                                                            @foreach ($categories as $key=>$category)
                                                            <option {{$post->category_id === $key ? 'selected': ''}} value="{{$key}}">{{$category}}</option>
                                                            @endforeach

                                                        </select>
                                                        @error('category')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="border p-3 rounded">
                                                    <div class="mb-3">
                                                        <label class="form-label">Tags</label>
                                                        <input type="text" class="form-control" value="{{$tags}}" data-role="tagsinput" name="tags">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <label for="inputProductDescription" class="form-label">Miniatura de post</label>
                                                    <input id="thumbnail"   name="thumbnail" id="file" type="file" >
                                                    @error('thumbnail')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{asset('storage/'.$post->image->path.'')}}" width="100%" class="img-responsive" alt="">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Texto</label>
                                        <textarea class="form-control" name="body" id="post_content" rows="3"> {{old("body", $post->body)}}</textarea>
                                        @error('body')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-grid">
                                                <a href="#"
                                                class="btn btn-danger"
                                                onclick="event.preventDefault();
                                                document.getElementById('delete_post_{{$post->id}}').submit()">
                                                    Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
								  </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </form>
                <form id="delete_post_{{$post->id}}"method="post" action="{{route('sediadministrador.posts.destroy', $post)}}">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
<script src="{{asset('admin_dashboard/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin_dashboard/plugins/input-tags/js/tagsinput.js')}}"></script>

<script>

    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    tinymce.init({
    selector: 'textarea#post_content',// Replace this CSS selector to match the placeholder element for TinyMCE
    skin: 'oxide',
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste imagetools wordcount'
    ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    mobile: {
        menubar: true
    },
    relative_urls: false,
    height:500,
    remove_script_host: false,
    images_upload_handler: function (blobInfo, success, failure) {

            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '{{route("sediadministrador.upload_tinymce_image")}}');
            var token = '{!!csrf_token()!!}';

            xhr.setRequestHeader("X-CSRF-Token", token);

            xhr.onload = function() {
                var json;

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();


            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
        file_picker_callback: function(cb, value, meta) {

            console.log(cb);
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                console.log(file);
                var blobInfo = blobCache.create(id, file);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
            input.click();
        }


    });
    setTimeout(()=>{
        $(".general-message").fadeOut();
    },1000);


</script>
@endsection
