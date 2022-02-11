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
								<li class="breadcrumb-item active" aria-current="page">Tags </li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Tag#</th>
										<th>Nombre del tag</th>
                                        <th>Post relacionados</th>
                                        <th>Fecha de creación</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 font-14">#{{$tag->id}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$tag->name}}</td>
                                            <td>{{$tag->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('sediadministrador.tags.show', $tag)}}">Post Relacionados</a>
                                            </td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="#" 
                                                        onclick="event.preventDefault(); 
                                                        document.getElementById('delete_form_{{$tag->id}}').submit()"
                                                        class="ms-3">
                                                            <i class='bx bxs-trash'></i>
                                                    </a>
                                                    <form method="post" id="delete_form_{{$tag->id}}" action="{{route('sediadministrador.tags.destroy', $tag)}}">
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
                            {{$tags->links()}}
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
	