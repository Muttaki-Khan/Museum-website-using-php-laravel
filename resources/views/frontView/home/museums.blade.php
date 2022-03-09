<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('frontEnd') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="{{ asset('frontEnd') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="{{ asset('frontEnd') }}/css/style1.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{ asset('frontEnd') }}/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="{{ asset('frontEnd') }}/js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ asset('frontEnd') }}/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
    <script src="{{ asset('frontEnd') }}/js/jquery.easing.min.js"></script>
    <title>Museums</title>
</head>

<body>
    <div class="container">
        <section class="w3l-intro" id="intro">
            <div id="cwp23-block" class="py-5">
                <div class="container py-lg-9">
                    <div class="row cwp23-content align-items-center">
                        <div class="col-lg-8 cwp23-text">

                        </div>
                        <div class="col-lg-6 mt-lg-0 mt-5 cwp23-img">
                            <a href="{{ url('/') }}"> <img src="{{ asset('frontEnd') }}/images/banner.PNG"
                                    style="width:200%" class="img-fluid" alt="" /></a>
                        </div>

                    </div>
                </div>


            </div>


            <br>


            <h1 style="text-align: center;">Pengenalan</h1><br>
            <p style="text-align: center;">Di dalam era kemajuan teknologi komputer, perubahan budaya teknologi bukan sahaja menyentuh sektor industri, malah ia juga dapat memberi kesan kepada pemeliharaan warisan budaya. Kesinambungan daripada projek sebelum ini iaitu Pembelajaran mesin bagi pengelasan Kendi untuk pemeliharaan warisan budaya, program ini pula cuba mempertengahkan pemeliharaan ini melalui laman web muzium digital dan pengenalan kepada pembelajaran mesin. Program ini adalah anjuran bersama Fakulti Sains Komputer dan Teknologi Maklumat, Fakulti Kejuruteraan, Fakulti Seni Kreatif dan Muzium Seni Asia Universiti Malaya. Program ini melibatkan pemindahan ilmu (latihan):
pembinaan/ penggunaan laman web untuk proses pendigitalan artifak muzium
aplikasi algoritma pembelajaran mesin untuk pengecaman artifak 
proses fotogrametri menukar gambar 2D kepada 3D</p><br>

            <?php
            $i = 0;
            ?>
            <div class="panel-body">
                <h1 class="{{ $font }}">Museums List</h1>

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>SI.</th>
                            <th>Admin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <form action="{{ route('museums') }}" method="post">
                                        @csrf
                                        <input type="hidden" , name="user_id" , value="{{ $user->id }}">
                                        <input type="hidden" , name="role_id" , value="{{ $user->role_id }}">
                                        <input type="submit"
                                            class="button {{ $theme }} {{ $font }} {{ $textcolor }}"
                                            value="Select" />

                                    </form>


                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="row">
                <div class="col-12 text-center">
                    {{ $items->links() }}
                </div>
            </div>
        </section>
    </div>
</body>

</html>
