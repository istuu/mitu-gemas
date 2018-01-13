<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Demo - Microsite MituBaby</title>
        <meta name="description" content="Face it." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-87253298-3');
        </script>
    </head>
    <body>
        <!--hero section-->
        <section class="hero p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 bg-primary-dark py-5 col-fixed text-center">
                        <div>
                            <img src="{{ asset('frontend') }}/img/logo.png" class="img-fluid"/>
                            <!-- <h1 class="main-heading">Face</h1> -->
                        </div>
                        <ul class="nav flex-column menu-left mt-5">
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#welcome">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#work">Mekanisme Promo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#about">Tukar Kode Verifikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#connect">Informasi Hadiah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#pemenang">Pemenang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#syarat">Syarat dan Ketentuan</a>
                            </li>

                        </ul>
                        <p class="pt-1 social-icon">
                            <a href="https://twitter.com/" target="_blank"><em class="ion-social-facebook text-twitter-alt icon-sm mr-3"></em></a>
                            <a href="https://github.com/" target="_blank"><em class="ion-social-instagram text-github-alt icon-sm mr-3"></em></a>
                            <a href="https://www.linkedin.com/" target="_blank"><em class="ion-social-youtube text-linkedin-alt icon-sm mr-3"></em></a>
                        </p>
                        <p>Consumer Care (021) 123-456</p>
                    </div>
                    <div class="col-sm-9 ml-auto px-0">
                        <!--welcome-->
                        <section class="hero bg-primary" id="welcome">
                            <div class="container">
                                <div class="align-middle text-center wow fadeIn">
                                    <!-- <div class="mt-4">
                                        <img src="{{ asset('frontend') }}/img/cloud.png" class="img-fluid"/>
                                    </div> -->
                                  <div class="pt-7">
                                  <img src="{{ asset('frontend') }}/img/cloud.png" class="img-fluid"/>
                                  <!-- <h2 class="heading text-pink text-uppercase">Menangkan <span style="color:gold">Emasnya</span></h2>
                                    <p class="heading lead text-pink">
                                        Wujudkan masa depan emas si kecil!
                                    </p> -->
                                  </div>
                                    <div class="mt-4">
                                      <p class="heading1 text-pink">
                                    Periode 1 Februari - 30 April 2018<br></p>
                                    </div>
                                    <div class="mt-4">
                                    <button class="btn btn-pink btn-lg">Tukar Kode verifikasi</button>
                                    </div>
                                    <div class="mt-4">
                                      <img src="{{ asset('frontend') }}/img/mitu-baby.png" class="img-fluid"/>
                                    </div>

                            </div>
                            </div>
                        </section>

                        <!--who we are-->
                        <section class="bg-style1" id="work">
                            <div class="container">
                                <div class="inner">
                                    <div class="row">
                                        <div class="col-md-12 wow fadeIn">
                                            <h2 class="text-pink text-center text-uppercase">Mekasnisme Promo</h2>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                    <div class="row col-md-10 offset-md-1 row mt-2 wow fadeIn">
                                            <div class="embed-responsive embed-responsive-21by9">
                                              <iframe width="560" height="315" src="https://www.youtube.com/embed/YwUfCi-C-N8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <div class="pb-3 text-center">
                                                    <img src="{{ asset('frontend') }}/img/mp-1.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <p>
                                                    Beli Mitu Baby Changing Diapers dengan sticker bertanda khusus, temukan dan gosok sticker pada kemasan
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <div class="pb-3 text-center">
                                                    <img src="{{ asset('frontend') }}/img/mp-2.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <p>
                                                    Jika beruntung Anda akan menemukan hadiah kepingan emas atau voucher pulsa beserta kode verifikasi
                                                </p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row mt-4">
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <div class="pb-3 text-center">
                                                    <img src="{{ asset('frontend') }}/img/mp-3.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <p>
                                                   Masukan kode verifikasi ke <a href="#" target="_blank">gebyaremas.mitu<br>babycare.com</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <div class="pb-3 text-center">
                                                    <img src="{{ asset('frontend') }}/img/mp-4.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 wow fadeInRight">
                                            <div class="border-all">
                                                <p>
                                                    Mitu Baby akan melakukan verifikasi sebelum melakukan pengiriman hadiah
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </section>

                        <!--who we are-->
                        <section class="bg-style4"  id="about">
                            <div class="container">
                                <div class="inner">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="text-pink text-center text-uppercase">Ikuti Program</h2>
                                            <!-- <p class="pt-4 text-center">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                    <form>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Nama</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Alamat Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Email">
                                      </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Nomer HP</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nomer HP">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Nomer Identitas</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nomer (Identitas KTP/SIM/Paspor)">
                                      </div>
                                      </div>
                                      <div class="form-row">

                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Provinsi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Provinsi 1</option>
                                          <option>Provinsi 2</option>
                                          <option>Provinsi 3</option>
                                          <option>Provinsi 4</option>
                                          <option>Provinsi 5</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Kota</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Kota 1</option>
                                          <option>Kota 2</option>
                                          <option>Kota 3</option>
                                          <option>Kota 4</option>
                                          <option>Kota 5</option>
                                        </select>
                                      </div>
                                      </div>
                                      <div class="form-row">

                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Pria</option>
                                          <option>Wanita</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Kode Verifikasi</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Kode Verifikasi">
                                      </div>
                                      </div>
                                      <div class="form-group text-center">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                          <label class="form-check-label" for="gridCheck">
                                            Ya saya telah membaca, dan menyetujui <a href="#" target="_blank">Syarat & Ketentuan</a> berlaku
                                          </label>
                                        </div>
                                      </div>
                                      <div class="text-center">
                                      <button type="submit" class="btn btn-pink btn-lg">SUBMIT</button>
                                      </div>

                                      <!-- <div class="form-group">
                                        <label for="exampleFormControlSelect2">Example multiple select</label>
                                        <select multiple class="form-control" id="exampleFormControlSelect2">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                    </form> -->


                                        <!-- <div class="col-sm-4 mt-2 wow fadeIn">
                                            <img src="{{ asset('frontend') }}/img/team-1.jpg" alt="Male" class="img-team img-fluid rounded-circle"/>
                                            <h5 class="card-title pt-4">John Deo</h5>
                                            <p class="card-text">Art Director</p>
                                        </div>
                                        <div class="col-sm-4 mt-2 wow fadeInUp">
                                            <img src="{{ asset('frontend') }}/img/team-2.jpg" alt="Male" class="img-team img-fluid rounded-circle"/>
                                            <h5 class="card-title pt-4">Brandon Lee</h5>
                                            <p class="card-text">Graphics Designer</p>
                                        </div>
                                        <div class="col-sm-4 mt-2 wow fadeInRight">
                                            <img src="{{ asset('frontend') }}/img/team-3.jpg" alt="Male" class="img-team img-fluid rounded-circle"/>
                                            <h5 class="card-title pt-4">Inza Fererri</h5>
                                            <p class="card-text">Product Designer</p>
                                        </div> -->


                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--contact-->
                        <section id="connect" class="bg-style2">
                            <div class="container">
                                <div class="inner">

                                <div class="row">
                                        <div class="col-md-12 wow fadeInRight">
                                            <h2 class="text-pink text-center text-uppercase">Informasi Hadiah</h2>
                                             <p class="pt-4 text-center">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- <div class="row text-center pt-5">
                                        <div class="col-md-6 wow fadeInRight pt-6">
                                            <div class="border-all">
                                                <div class="pb-3">
                                                    <img src="{{ asset('frontend') }}/img/lm-1.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                                <h5 class="pb-3">GRAND PRIZE<br>1 EMAS 100gr</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInRight">
                                            <div class="border-all">
                                                <div class="pb-3">
                                                    <img src="{{ asset('frontend') }}/img/lm-2.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                                <h5 class="pb-3">20<br>EMAS 5 GRAM</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInRight">
                                            <div class="border-all">
                                                <div class="pb-3">
                                                    <img src="{{ asset('frontend') }}/img/lm-3.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                                <h5 class="pb-3">100<br>EMAS 1 GRAM</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInRight">
                                            <div class="border-all">
                                                <div class="pb-3">
                                                    <img src="{{ asset('frontend') }}/img/pl-1.png" alt="Male" class="img-team img-fluid"/>
                                                </div>
                                                <h5 class="pb-3">17000<br>VOUCHER PULSA RP. 25.000</h5>
                                            </div>
                                        </div>
                                    </div> -->

                                     <div class="row d-md-flex mt-4 text-center">
                                        <div class="col-sm-6 mt-2 wow fadeIn">
                                            <img src="{{ asset('frontend') }}/img/lm-1.png" alt="Emas 100 Gram" class="img-team img-fluid"/>
                                            <h5 class="card-title text-uppercase pt-4">GRAND PRIZE<br>1 EMAS 100gr</h5>
                                        </div>
                                        <div class="col-sm-6 mt-2 wow fadeInRight">
                                            <img src="{{ asset('frontend') }}/img/lm-2.png" alt="Emas 5 Gram" class="img-team img-fluid"/>
                                            <h5 class="card-title text-uppercase pt-4">20<br>EMAS 5 GRAM</h5>
                                        </div>
                                        <div class="col-sm-6 mt-2 wow fadeInRight">
                                            <img src="{{ asset('frontend') }}/img/lm-3.png" alt="Emas 1 Gram" class="img-team img-fluid"/>
                                            <h5 class="card-title text-uppercase pt-4">100<br>EMAS 1 GRAM</h5>
                                        </div>
                                        <div class="col-sm-6 mt-2 wow fadeInRight">
                                            <img src="{{ asset('frontend') }}/img/pl-1.png" alt="Voucher Pulsa Rp. 25.000" class="img-team img-fluid"/>
                                            <h5 class="card-title text-uppercase pt-4">17000<br>VOUCHER PULSA RP. 25.000</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--who we are-->
                        <section class="bg-style1" id="pemenang">
                            <div class="container">
                                <div class="inner">
                                    <div class="row">
                                        <div class="col-md-12 wow fadeIn">
                                            <h2 class="text-pink text-center text-uppercase">Informasi Pemenang</h2>

                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-12 mt-4 wow fadeIn">
                                    <div class="table-responsive-sm">
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Pemenang</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Hadiah</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Emas 100 Gram</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>Emas 100 Gram</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Emas 5 Gram</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Emas 1 Gram</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">5</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Emas 100 Gram</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">6</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Pulsa Rp. 25.000</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">7</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Pulsa Rp. 25.000</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">8</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Pulsa Rp. 25.000</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">9</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Emas 100 Gram</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">10</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Emas 1 Gram</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      </div>
                                      <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                          <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                          </li>
                                        </ul>
                                      </nav>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--Syarat dan Ketentuan-->
                        <section class="bg-style2 pt-0" id="syarat">
                            <div class="container">
                            <div class="inner">
                            <div class="row">
                                        <div class="col-md-12 wow fadeIn">
                                            <h2 class="text-pink text-center text-uppercase">Syarat dan Ketentuan</h2>

                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2 col-xs-12 text-center">
                                        <p class="pt-2 text-center">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>

                        <!--footer-->
                        <section class="bg-style3 pt-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2 col-xs-12 text-center">
                                        <!-- <p class="mt-2 social-icon">
                                            <a href="https://twitter.com/" target="_blank"><em class="ion-social-twitter text-twitter-alt icon-sm mr-3"></em></a>
                                            <a href="https://github.com/" target="_blank"><em class="ion-social-github text-github-alt icon-sm mr-3"></em></a>
                                            <a href="https://www.linkedin.com/" target="_blank"><em class="ion-social-linkedin text-linkedin-alt icon-sm mr-3"></em></a>
                                        </p> -->
                                        <p class="pt-2 text-center">
                                            &copy; 2017 GODREJ. All Right Reserved Site by MITUBABY<br>More Info : Consumer Care (021) 123-456
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="{{ asset('frontend') }}/js/scripts.js"></script>
    </body>
</html>
