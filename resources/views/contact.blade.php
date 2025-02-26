<head> <title>Contact</title></head>
@extends('layouts.interfacegen')
@section('content')



    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{asset('ptoo/images/PROFIL.jpg')}});">
        <h2 class="tit6 t-center">
            CONTACTEZ-NOUS
        </h2>
    </section>



    <!-- Contact form -->
    <section class="section-contact bg1-pattern p-t-90 p-b-113">

        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                Envoyez-nous Un Message
            </h3>

            <form  action="mailto:khalilfrikha30@gmail.com" method="post" enctype="text/plain">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
              Nom
            </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="name" name="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Email -->
                        <span class="txt9">
            Votre Email
            </span>

                        <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="email" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Phone -->
                        <span class="txt9">
              Telephone
            </span>

                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="Telephone" name="Telephone" placeholder="Phone">
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Message -->
                        <span class="txt9">
              Message
            </span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" id="message" name="message" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="wrap-btn-booking flex-c-m m-t-13">
                    <!-- Button3 -->
                    <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
                        Envoyer
                    </button>
                </div>
            </form>

            <div class="row p-t-135">
                <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="ptoo/images/icons/map-icon.png" alt="IMG-ICON">
                        </div>

                        <div class="flex-col-l">
              <span class="txt5 p-b-10">
                Location
              </span>

                            <span class="txt23 size38">
              Route de Gabes km 3 - 3042 - Tunisie
              </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="ptoo/images/icons/phone-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
              <span class="txt5 p-b-10">
                Contacter nous
              </span>

                            <span class="txt23 size38">
              (+216) 74 453 027
              </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="ptoo/images/icons/clock-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
              <span class="txt5 p-b-10">
                Horaires d'ouverture
              </span>

                            <span class="txt23 size38">
                09:30 AM – 11:00 PM <br/>Every Day
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection