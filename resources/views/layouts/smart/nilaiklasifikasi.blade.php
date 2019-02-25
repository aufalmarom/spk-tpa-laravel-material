@extends('templates.master')

@section('content')

    <div class="row">

        @foreach ($datas as $data)
        <div class="card col-md-8">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                <h4 class="card-title">Nilai Klasifikasi {{$data->parameter}}</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Kategori</th>
                                <th class="text-center">Nilai</th>
                                <th class="text-justify">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $nilai = NilaiKlasifikasi($data->id);
                                $no =1;
                            @endphp
                            @foreach ($nilai as $nilai)
                                @if ($nilai->batas_atas != null)
                                    <tr>
                                        <td class="text-center">{{$no}}</td>
                                        <td>{{$nilai->batas_bawah}} - {{$nilai->batas_atas}}</td>
                                        <td class="text-center">{{$nilai->nilai}}</td>
                                        <td>
                                            <a href="{{route('editnilaiklasifikasikriteria.read', $data->id)}}"><button rel="tooltip" type="button" rel="tooltip" title="Edit" class="btn btn-rose btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button></a>

                                            <button rel="tooltip" type="button" title="Remove" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-delete-kriteria{{$nilai->id}}">
                                            <i class="material-icons">clear</i>
                                            <div class="ripple-container"></div>
                                            </button>

                                            <div class="modal fade modal-mini modal-rose" id="modal-delete-kriteria{{$nilai->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-small">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <p>Apakah anda akan menghapus data ?</p>
                                                        </div>

                                                        <form method="POST" action="{{route('kriteria.delete')}}">
                                                                {{csrf_field()}}
                                                            <div class="modal-footer justify-content-center">
                                                            <div style="display:none">
                                                                <input  type="text" name="id" value="{{$nilai->id}}">
                                                            </div>
                                                                <button class="btn btn-primary" data-dismiss="modal">Tidak</button>
                                                                <button type="submit" class="btn btn-danger"> Iya</button>
                                                                <div class="ripple-container"></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="text-center">{{$no}}</td>
                                        <td>{{$nilai->kategori}}</td>
                                        <td class="text-center">{{$nilai->nilai}}</td>
                                        <td>
                                            <a href="{{route('editnilaiklasifikasikategori.read', $nilai->id_parameter)}}"><button rel="tooltip" type="button" rel="tooltip" title="Edit" class="btn btn-rose btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button></a>

                                            <button rel="tooltip" type="button" title="Remove" class="btn btn-rose btn-link btn-sm" data-toggle="modal" data-target="#modal-delete-kategori{{$nilai->id}}">
                                                <i class="material-icons">clear</i>
                                                <div class="ripple-container"></div>
                                            </button>

                                                <div class="modal fade modal-mini modal-rose" id="modal-delete-kategori{{$nilai->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-small">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <p>Apakah anda akan menghapus data ?</p>
                                                            </div>

                                                            <form method="POST" action="{{route('kategori.delete')}}">
                                                                    {{csrf_field()}}
                                                                <div class="modal-footer justify-content-center">
                                                                <div style="display:none">
                                                                    <input  type="text" name="id" value="{{$nilai->id}}">
                                                                </div>
                                                                    <button class="btn btn-primary" data-dismiss="modal">Tidak</button>
                                                                    <button type="submit" class="btn btn-danger"> Iya</button>
                                                                    <div class="ripple-container"></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endif
                                @php
                                    $no++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>

@endsection
