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
                <h1 class="{{ $font }}">Contest Results</h1>

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    
                <thead>
                        <tr>
                            <th>Position.</th>
                            <th>Winning Category</th>
                            <th>Muzium</th>
                            <th>Remarks</th>
                            <th>Reward</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1st</td>
                                <td>First Prize and Overall Winner 
                                Pemenang Pertama dan Pemenang Keseluruhan 
                                </td>
                                <td>Museum Seni Asia UM</td>
                                <td>Received highest overall marks for digital platform and accomplished all requirements. Worth effort to generate relatively clear High resolution 3D image that is aesthetically presented to fit the selected artifact collection.</td>
                                <td>1000 RM & Certificate</td>
                            </tr>

                            <tr>
                                <td>2nd</td>
                                <td>Best Effort for Machine Learning and Photogrammetry 
Usaha Terbaik untuk Pembelajaran Mesin dan Fotogrammetri 
                                </td>
                                <td>Perbadanan Adat Melayu & Warisan Negeri Selangor</td>
                                <td>The museum presented both ML and 3D image in its digital platform and fulfilled the criteria</td>
                                <td>750 RM & Certificate</td>
                            </tr>

                            <tr>
                                <td>3rd</td>
                                <td>Best Generated 3D Image
Imej 3D Terjana Terbaik
                                </td>
                                <td>Muzium UUM</td>
                                <td>The theme is brought alive through the vibrant orange colour and the image of a child to reflect a bright future of museums with the younger generation. The rotating banner jives with the footing banner and shows its connectivity with other sections.</td>
                                <td>500 RM & Certificate</td>
                            </tr>

                            <tr>
                                <td>4th</td>
                                <td>Best Organised  Theme
Tema Tersusun Terbaik 
                                </td>
                                <td>Muzium UMT</td>
                                <td>The theme is brought alive through the vibrant orange colour and the image of a child to reflect a bright future of museums with the younger generation. The rotating banner jives with the footing banner and shows its connectivity with other sections.</td>
                                <td>Certificate</td>
                            </tr>

                            <tr>
                                <td>5th</td>
                                <td>Best  oral presentation
Persembahan Lisan Terbaik 
                                </td>
                                <td>Muzium UMT</td>
                                <td>The only library that participated, and made a good team effort to fulfil most criteria and presented a Gallery of Campus Memorabilia and Heritage </td>
                                <td>Certificate</td>
                            </tr>


                            <tr>
                                <td>6th</td>
                                <td>Gallery of Campus Memorabilia and Heritage 
Hadiah untuk Koleksi Kenangan Kampus dan Warisan
                                </td>
                                <td>Perpustakaan UTMKL</td>
                                <td>The only library that participated, and made a good team effort to fulfil most criteria and presented a Gallery of Campus Memorabilia and Heritage .</td>
                                <td>Certificate</td>
                            </tr>
                             
                    </tbody>
                </table>

            </div>


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
