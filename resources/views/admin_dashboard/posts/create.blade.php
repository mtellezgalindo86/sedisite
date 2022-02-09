@extends("admin_dashboard.layouts.app")

@section("style")
<link href="{{asset('admin_dashboard/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin_dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin_dashboard/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
<script src="https://cdn.tiny.cloud/1/049cbc9th46j9z79vcr32zy3h680sweynpzmfkosfv1fdx2o/tinymce/5/tinymce.min.js" 
referrerpolicy="origin"></script>
<style>
    .imageuploadify{
        margin: 0;
        max-width: 100%;
    }
</style>
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
                <h5 class="card-title">Agregar nuevos post</h5>
                <hr />
                <form action="{{route('sediadministrador.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Titulo del post</label>
                                        <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Subtitulo del post</label>
                                        <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Post extracto</label>
                                        <textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Post categoria</label>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="border p-3 rounded">
                                                    <div class="mb-3">
                                                        <label class="form-label">Select2 Text Control</label>
                                                        <select class="single-select">
                                                            @foreach ($categories as $key=>$category)
                                                            <option value="{{$key}}">{{$category}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Imagen del post</label>
                                        <input id="image-uploadify" type="file" accept="image/*" multiple>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Texto</label>
                                        <textarea class="form-control" id="post_content" rows="3"></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--end row-->
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
<script src="{{asset('admin_dashboard/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
<script src="{{asset('admin_dashboard/plugins/select2/js/select2.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
    });
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

    // tinymce.init({
    // selector: 'textarea#post_content',// Replace this CSS selector to match the placeholder element for TinyMCE
    // skin: 'oxide',
    // plugins: [
    //     'advlist autolink lists link image charmap print preview anchor',
    //     'searchreplace visualblocks code fullscreen',
    //     'insertdatetime media table paste imagetools wordcount'
    // ],
    // toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    // mobile: {
    //     menubar: true
    // },
    // height:500,
    // image_title:true,
    // automatic_uploads:true,
    // images_upload_handler: function (blobInfo, success, failure) {
    //     let formData = new FormData();
    //     let _token = $("input[name='_token']").val();
    //     let xhr = new XMLHttpRequest();
    //     xhr.open('post', "{{route('sediadministrador.upload_tinymce_image')}}");
    //     xhr.onload = () => {
    //         if(xhr.status !== 200){
    //             failure("Http Error: " + xhr.status);
    //             return
    //         }
    //         let json = JSON.parse(xhr.responseText)
    //         if(!json || typeof json.location != 'string'){
    //             failure("Invalid Json:" + xhr.responseText)
    //             return
    //         }
    //         success(json.location)
    //     }
    //     formData.append('_token', _token);
    //     formData.append('file', blobInfo.blob(), blobInfo.filename());
    //     xhr.send(formData)
    // }
        //     var xhr, formData;
        //     xhr = new XMLHttpRequest();
        //     xhr.withCredentials = false;
        //     xhr.open('POST', '{{route("sediadministrador.upload_tinymce_image")}}');
        //     var token = '{!!csrf_token()!!}';

        //     xhr.setRequestHeader("X-CSRF-Token", token);

        //     xhr.onload = function() {
        //         var json;

        //         if (xhr.status != 200) {
        //             failure('HTTP Error: ' + xhr.status);
        //             return;
        //         }
        //         json = JSON.parse(xhr.responseText);

        //         if (!json || typeof json.location != 'string') {
        //             failure('Invalid JSON: ' + xhr.responseText);
        //             return;
        //         }
        //         success(json.location);
        //     };
        //     formData = new FormData();


        //     formData.append('file', blobInfo.blob(), blobInfo.filename());
        //     xhr.send(formData);
        // },
        // file_picker_callback: function(cb, value, meta) {

        //     console.log(cb);
        //     var input = document.createElement('input');
        //     input.setAttribute('type', 'file');
        //     input.setAttribute('accept', 'image/*');
        //     input.onchange = function() {
        //         var file = this.files[0];
        //         var id = 'blobid' + (new Date()).getTime();
        //         var blobCache = tinymce.activeEditor.editorUpload.blobCache;
        //         console.log(file);
        //         var blobInfo = blobCache.create(id, file);
        //         blobCache.add(blobInfo);
        //         cb(blobInfo.blobUri(), { title: file.name });
        //     };
        //     input.click();
        // }

       



</script>
@endsection