@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Gestion Rapports</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Rapport Multicommerce</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<hr/>




<div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">

	<form method="post" action="{{ route('search-by-date')}}">
		@csrf

		<div class="col">
			<div class="card">

				<div class="card-body">
					<h5 class="card-title">Recherche par Date</h5>
					 <label class="form-label">Date:</label>
		<input type="date" name="date" class="form-control">
		<br>
		<input type="submit" class="btn btn-rounded btn-primary" value="Search">
				</div>


			</div>
		</div>
	</form>



<form method="post" action="{{ route('search-by-month')}}">
		@csrf

		<div class="col">
			<div class="card">

				<div class="card-body">
					<h5 class="card-title">Recherche par Mois</h5>
					 <label class="form-label">Choisir le Mois:</label>
		<select name="month" class="form-select mb-3" aria-label="Default select example">
		<option selected="">Dérouler</option>
		<option value="Janurary">Janvier</option>
		<option value="February">Février</option>
		<option value="March">Mars</option>
		<option value="April">Avril</option>
		<option value="May">Mai</option>
		<option value="June">Juin</option>
		<option value="July">Juillet</option>
		<option value="August">Aouût</option>
		<option value="September">Septembre</option>
		<option value="October">Octobre</option>
		<option value="November">Novembre</option>
		<option value="December">Decembre</option>
	</select>

	  <label class="form-label">Choisir l'Année:</label>
		<select name="year_name" class="form-select mb-3" aria-label="Default select example">
		<option selected="">Dérouler</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
	</select>


		<br>
		<input type="submit" class="btn btn-rounded btn-primary" value="Recherche">
				</div>


			</div>
		</div>
	</form>




 <form method="post" action="{{ route('search-by-year')}}">
		@csrf
		<div class="col">
			<div class="card">

				<div class="card-body">
					<h5 class="card-title">Recherche par Année</h5>


	  <label class="form-label">Choisir l'Année:</label>
		<select name="year" class="form-select mb-3" aria-label="Default select example">
		<option selected="">Dérouler</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
	</select>


		<br>
		<input type="submit" class="btn btn-rounded btn-primary" value="Recherche">
				</div>


			</div>
		</div>
	</form>



				</div>


			</div>




@endsection
