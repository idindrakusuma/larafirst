@extends('layouts.partials.homeMaster')

@section('title','Hubungi Kami ')

@section('content')
  <div class="why-w3">
    <div class="container min-margin-3">
      <div class="grid_3 grid_4">
					<div class="page-header">
				<h3 class="text-center">Hubungi Kami</h3>
      </div>
      <!-- form pendaftaran -->
      <div class="col-md-8 wow fadeInLeft">

        @if (Session::has('alert-success'))
          <div class="alert alert-info wow bounceIn" role="alert" data-wow-duration="4s">
            <h4 style="font-size:16px;"><strong> {{session('alert-success')}} </strong></h4>
          </div>
        @endif

          <!-- isi form -->
          <form class="form-horizontal" method="post" action="{{ url('/contact') }}" autocomplete="off">
            <div class="col-md-12">
              <div class="form-group">
                <label for="namaLengkap">Nama Anda</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="harus aktif.." required="">
              </div>

              <div class="form-group">
                <label for="nim">Pesan Anda</label>
                  <textarea name="pesan" class="form-control" placeholder="Pesan Kamu.." rows="4" cols="50" required=""> </textarea>
              </div>
              {{ csrf_field() }}
              <div class="form-group">
                <div class="col-sm-12">
                  <div class="col-sm-6 pull-right">
                    <button type="submit" class="btn btn-primary pull-right" style="margin-right:-20px;">Kirim</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </div>

      <div class="col-md-4 wow fadeInRight">
            <hr class="divider">
            <h3>More Info</h3>
              <ul>
                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : Jalan Mekarsari No 7 Semarang</li>
                <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 089522248642</li>
                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> Email : id.indrakusuma@gmail.com</li>
                <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : (024)881234</li>
                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Jalan Pusponjolo XI - XII Semarang Barat</li>
              </ul>
              <hr class="divider">
    </div>
  </div>
</div>
</div>
@endsection
