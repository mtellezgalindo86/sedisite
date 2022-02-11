@extends("admin_dashboard.layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Blog</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Categorias </li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
						  <div class="ms-auto"><a href="{{route('sediadministrador.categories.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Crear nueva categoria</a></div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Categoria#</th>
										<th>Nombre de Categoría</th>
										<th>Slug</th>
										<th>Fecha de creación</th>
                                        <th>Post relacionados</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 font-14">#{{$category->id}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>{{$category->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('sediadministrador.categories.show', $category)}}">Post Relacionados</a>
                                            </td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="{{route('sediadministrador.categories.edit',$category)}}" class=""><i class='bx bxs-edit'></i></a>
                                                    <a href="#" 
                                                        onclick="event.preventDefault(); 
                                                        document.getElementById('delete_form_{{$category->id}}').submit()"
                                                        class="ms-3">
                                                            <i class='bx bxs-trash'></i>
                                                    </a>
                                                    <form method="post" id="delete_form_{{$category->id}}" action="{{route('sediadministrador.categories.destroy', $category)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
                        <div class="mt-4">
                            {{$categories->links()}}
                        </div>
                        
					</div>
				</div>
              

			</div>
		</div>
        <script>
            setTimeout(()=>{
                $(".general-message").fadeOut();
            },1000);

        </script>
		<!--end page wrapper -->
		@endsection
	