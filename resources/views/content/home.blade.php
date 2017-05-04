@extends('layout.master')

@section('title','Welcome to LaraFirst')

@section('content')
  <div class="content">
				<div class="about-w3ls" style="margin-top:-3em;">
					<div class="container">
						<div class="about-grids">
							<div class="col-md-6 about-grid1">
								<img src="{{ url('/images/laravel.png') }}" class="img-responsive" alt=""/>
							</div>
							<div class="col-md-6 about-grid">
								<h4>The Firts Project Using Laravel </h4>
								<p><b>LaraFirst</b> adalah suatu proyek pribadi yang saya kerjakan dengan tujuan untuk mendalami Framework Laravel. Web ini nantinya akan berisi konten dinamis seperti Galeri, blog maupun berita dan form kontak yang bisa digunakan untuk proses komunikasi anatara user dengan admin.</p>
                <p>Laravel dengan popularitas dan berbagai kelebihannnya menjawab masalah itu. Dapat kita temui banyak project opensource menggunakan Laravel, misalnya Flarum, sebuah aplikasi forum yang dibangun diatas Laravel dan EmberJS.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
    </div>
@endsection
