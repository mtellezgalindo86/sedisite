@extends("admin_dashboard.layouts.app")


@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Categorías</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Categorías</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Editar categoría: {{$category->name}}</h5>
                <hr />
                <form action="{{route('sediadministrador.categories.update', $category)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Nombre de la categoría</label>
                                        <input type="text" name="name" value='{{old("name", $category->name)}}' class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Categoría identidicador</label>
                                        <input type="text" name="slug"  value='{{old("slug", $category->slug)}}' class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                        @error('slug')
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
                                                document.getElementById('delete_category_{{$category->id}}').submit()">
                                                    Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </form>
                <form method="post" id="delete_category_{{$category->id}}" action="{{route('sediadministrador.categories.destroy', $category)}}">
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
<script>
    $(document).ready(function() {
        setTimeout(()=>{
            $(".general-message").fadeOut();
        },500);
    });
</script>
@endsection