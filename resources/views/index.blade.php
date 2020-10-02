<!DOCTYPE html>
<html>
<head>
	<title>Portal Berita Mercu Buana</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<style>
		img{
			width : 150px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Logo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				<a class="nav-link" href="#">Home
					<span class="sr-only">(current)</span>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Services</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>

	<div class="container">
	</div>

	<br/>
	<br/>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center"><a href="https://mercubuana.ac.id">PORTAL BERITA MERCU BUANA</a></h2>

				<h3 class="text-center">Oleh</h3>
				<h3 class="text-center">Kelompok 8</h3>

				<p>Cari Berita :</p>

				<div class="form-group">
					
				</div>
				<form action="/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Berita .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				</br>

				<p><a href="/addBerita">Klik disini untuk refresh berita</a></p>

				<div class="row">
					<div class="col-md-12 ">
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="row">
								@foreach($feed as $p)
								<div class="col-md-6">
									<div class="card h-100">
										<div class="card-body">
											<h4 class="card-title">{{ $p->title }}</h4>
											<p>{{ $p->date }}</p>
											<p><?php echo $p->description; ?></p>
										</div>
										<div class="card-footer">
											<a class="btn btn-danger btn-sm" href="{{ $p->link }}">Baca lebih lanjut</a>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>

				{{ $feed ?? ''->links() }}
			</div>
		</div>
	</div>
</body>
</html>