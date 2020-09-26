<!DOCTYPE html>
<html>
<head>
	<title>Portal Berita Mercu Buana</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

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

				<table class="table table-bordered">
					@foreach($feed as $p)
					<tr>
						<td><a href="{{ $p->link }}">{{ $p->title }}</a></td>
						<td>{{ $p->date }}</td>
						<td>{{ $p->description }}</td>
						<td>
							<a class="btn btn-danger btn-sm" href="/hapusBerita/{{ $p->id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				{{ $feed ?? ''->links() }}
			</div>
		</div>
	</div>


</body>
</html>