@extends('layouts/master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">assessment</i>

                    </div>
                    <h4 class="card-title">Result Ranking of SMART Method</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="table-responsive table-sales">
                                <table class="table">
                                    <tbody>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>abang</td>
                                            <td>Semarang</td>
                                            <td>90</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>2</td>
                                            <td>ijo</td>
                                            <td>Lasem</td>
                                            <td>80</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>3</td>
                                            <td>biru</td>
                                            <td>Leran</td>
                                            <td>70</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>4</td>
                                            <td>kuneng</td>
                                            <td>Gondang</td>
                                            <td>60</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>5</td>
                                            <td>abang</td>
                                            <td>Ngesrep</td>
                                            <td>50</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>6</td>
                                            <td>ijo</td>
                                            <td>Lasem</td>
                                            <td>40</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>7</td>
                                            <td>biru</td>
                                            <td>Leran</td>
                                            <td>35</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>8</td>
                                            <td>kuneng</td>
                                            <td>Pemalang</td>
                                            <td>34</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>9</td>
                                            <td>abang</td>
                                            <td>Semarang</td>
                                            <td>33</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>10</td>
                                            <td>putih lungset</td>
                                            <td>Yogyakarta</td>
                                            <td>30</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>9</td>
                                            <td>putih tog</td>
                                            <td>Malang</td>
                                            <td>20</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>10</td>
                                            <td>putih tulang</td>
                                            <td>Jakarta</td>
                                            <td>15</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>11</td>
                                            <td>biru nom</td>
                                            <td>Timoho</td>
                                            <td>10</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>12</td>
                                            <td>biru tuo</td>
                                            <td>Surabaya</td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-8 ml-auto mr-auto">
                            <div id="worldMap" >
                                <div class="jvectormap-container" style="background-color: transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">broken_image</i>
                    </div>
                    <p class="card-category">Data Kelerengan</p>
                    <h3 class="card-title">14</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-rose">apps</i>
                        <a href="#">Full</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">nature_people</i>
                    </div>
                    <p class="card-category">Data Penggunaan Lahan</p>
                    <h3 class="card-title">14</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-rose">apps</i>
                        <a href="#">Full</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">public</i>
                    </div>
                    <p class="card-category">Data Geologi</p>
                    <h3 class="card-title">14</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-rose">apps</i>
                        <a href="#">Full</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">filter_hdr</i>
                    </div>
                    <p class="card-category">Data Rawan Bencana</p>
                    <h3 class="card-title">14</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-rose">apps</i>
                        <a href="#">Full</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">bubble_chart</i>
                    </div>
                    <p class="card-category">Data Hidrologi</p>
                    <h3 class="card-title">14</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-rose">apps</i>
                        <a href="#">Full</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">cloud</i>
                    </div>
                    <p class="card-category">Data Curah Hujan</p>
                    <h3 class="card-title">14</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-rose">apps</i>
                        <a href="#">Full</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">waves</i>
                    </div>
                    <p class="card-category">Data Jenis Tanah</p>
                    <h3 class="card-title">14</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-rose">apps</i>
                        <a href="#">Full</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
