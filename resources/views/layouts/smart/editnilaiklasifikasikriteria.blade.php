@extends('templates.master')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif($message = Session::get('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{$message}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
                <i class="material-icons">contacts</i>

            </div>
            <h4 class="card-title">Tambah & Edit Nilai Klasifikasi Kriteria</h4>
        </div>

        <div class="card-body">

            <form method="POST" action="{{route('editnilaiklasifikasikriteria.create')}}">
              {{csrf_field()}}
              <input type="hidden" name="parameter" value="{{$datas->first()->id_parameter}}" required>
                @foreach ($datas as $data)

                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Batas Bawah</label>
                            <input type="text" name="batas_bawah[]" class="form-control" value="{{$data->batas_bawah}}" required>
                            <input type="hidden" name="id[]" value="{{$data->id}}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Batas Atas</label>
                            <input type="text" name="batas_atas[]" class="form-control" value="{{$data->batas_atas}}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Nilai</label>
                            <input type="text" name="nilai[]" class="form-control" value="{{$data->nilai}}" required>
                            </div>
                        </div>
                    </div>

                @endforeach
                <div id="dynamic_form">

                </div>
                <script type="text/javascript">
                    var room = 1;
				   function dynamic() {
						room++;
						var objTo = document.getElementById('dynamic_form');
						var divtest = document.createElement("div");
						divtest.setAttribute("class", "row removeclass"+room);
						var stress= "'";
						divtest.innerHTML = '<div class="col-md-3"><div class="form-group"><label class="bmd-label-floating">Batas Bawah</label><input type="text" name="batas_bawah[]" class="form-control" required><input type="hidden" name="id[]" required></div></div><div class="col-md-3"><div class="form-group"><label class="bmd-label-floating">Batas Atas</label><input type="text" name="batas_atas[]" class="form-control" required></div></div><div class="col-md-3"><div class="form-group"><label class="bmd-label-floating">Nilai</label><input type="text" name="nilai[]" class="form-control" required></div></div><div class="col-md-3"><div class="form-group"><a class="btn" onclick="remove_dynamic('+ room +');">-</a></div></div>';

						objTo.appendChild(divtest);
					}
				   function remove_dynamic(rid) {
					   $('.removeclass'+rid).remove();
				   }
                </script>
              <button type="btn" class="btn btn-rose pull-left" onclick="dynamic()">Tambah Data TPA</button>
              <button type="submit" class="btn btn-rose pull-right">Update Data TPA</button>
              <div class="clearfix"></div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection
