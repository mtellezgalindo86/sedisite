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
								<li class="breadcrumb-item active" aria-current="page">Contactos </li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
							</div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Id#</th>
										<th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
										<th>Mensaje</th>
										<th>Estatus</th>
                                        <th>¿Contactado?</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{$contact["id"]}}</td>
                                        <td>{{$contact["name"]}}</td>
                                        <td>{{$contact["email"]}}</td>
                                        <td>{{$contact["phone"]}}</td>
                                        <td>{{$contact["comment"]}}</td>
                                        @php
                                            if($contact["read"] == 0){
                                                $status = "Pendiente";
                                            }
                                        @endphp
                                        <td>{{$status}}</td>
                                        <td><a href="{{route('sediadministrador.update-contact', $contact['id'])}}">Si</a></td>
                                    </tr>
                                    @endforeach
								</tbody>
							</table>
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
	