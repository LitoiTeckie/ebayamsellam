@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Gestion des catégories de Blog</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Toutes les catégories de Blog</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
		<a href="{{ route('add.blog.category') }}" class="btn btn-primary">Ajout de catégorie de Blog</a>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
			<tr>
				<th>Sl</th>
				<th>Nom de la catégorie </th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	@foreach($blogcategories as $key => $item)
			<tr>
				<td> {{ $key+1 }} </td>
				<td>{{ $item->blog_category_name }}</td>

				<td>
<a href="{{ route('edit.blog.category',$item->id) }}" class="btn btn-info">Editer</a>
<a href="{{ route('delete.blog.category',$item->id) }}" class="btn btn-danger" id="delete" >Supprimer</a>

				</td>
			</tr>
			@endforeach


		</tbody>
		<tfoot>
			<tr>
				<th>Sl</th>
				<th>Nom de la catégorie </th>
				<th>Action</th>
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>



			</div>




@endsection