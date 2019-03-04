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
            <h4 class="card-title">Tambah dan Edit Nilai Klasifikasi {{$datas1->parameter}}</h4>
        </div>

        <div class="card-body">

            <form method="POST" action="{{route('editnilaiklasifikasi.create')}}">
              {{csrf_field()}}
                <input type="hidden" name="parameter" value="{{$datas1->id}}" required>
                @foreach ($datas as $data)

                <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                            <label class="bmd-label-floating">Nilai Parameter</label>
                            <input type="text" name="nilai_parameter[]" class="form-control" value="{{$data->nilai_parameter}}" required>
                            <input type="hidden" name="id[]" value="{{$data->id}}" required>
                            <input type="hidden" name="kategorilama[]" value="{{$data->nilai_parameter}}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label class="bmd-label-floating">Nilai Klasifikasi</label>
                            <input type="text" name="nilai_klasifikasi[]" class="form-control" value="{{$data->nilai_klasifikasi}}" required>
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
						divtest.innerHTML = '<div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nilai Parameter</label><input type="text" name="nilai_parameter[]" class="form-control" required><input type="hidden" name="id[]" required></div></div><div class="col-md-3"><div class="form-group"><label class="bmd-label-floating">Nilai Klasifikasi</label><input type="text" name="nilai_klasifikasi[]" class="form-control" required></div></div><div class="col-md-3"><div class="form-group"><a class="btn" onclick="remove_dynamic('+ room +');">-</a></div></div>';

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
