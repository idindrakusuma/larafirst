@extends('layouts.partials.homeMaster')

@section('title','Blog')

@section('content')
    <div class="container" style="margin-bottom:2em;">
      <div class="grid_3 grid_4">
          <div class="page-header">
            <h3 class="text-center">Artikel LaraFirst</h3>
          </div>
      </div>


				<div class="col-md-4 special-grid shadow">
						<div class="special1">
							<img src="http://bai.dinus.ac.id/bai-admin/uploads/ae9e3-gema-ramadhan-2016.jpeg" class="img-responsive" alt=""/>
							<div class="special-icon hvr-sweep-to-top">
								<a href=""><i class="glyphicon glyphicon-th" aria-hidden="true"></i></a>
							</div>
						</div>
						<div class="special-bottom">
							<h4>GEMA RAMADHAN</h4>
							<p>
                Beberapa rangkaian kegiatan BAI di satu bulan Ramadhan yang sangat penuh dengan limpahan berkah dari yang Maha Kaya, : 1. Tadarus Quran, dilakukan setiap hari setelah shalat Tarawih...
							</p>
              <a class="btn btn-danger btn-sm" style="margin-top:10px;" href=""><i class="fa fa-eye"></i> Selengkapnya</a>
						</div>
					</div>
  </div>

@endsection
