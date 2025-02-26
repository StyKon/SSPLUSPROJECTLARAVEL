<style>


    article {
        margin: 40px 30px;
    }

    h1 {
        font-family: 'Open Sans Condensed', sans-serif;
        letter-spacing: 1px;
        font-size: 2.3em;
        line-height: 44px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 900;
        margin: 0;
        padding: 10px 0 0 30px;
        letter-spacing: 2px;
    }

    h2 { margin: 20px 0 10px 0;
        font-weight: 900;
    }

    p {
        margin: 20px 0 5px 0;
    }


    /* Table Layout */

    table.vitamins {
        margin: 20px 0 0 0;
        border-collapse: collapse;
        border-spacing: 0;
        background: #212121;
        color: #fff;

    }

    table.vitamins th, table.vitamins td {
        text-align: center;
    }

    table.vitamins thead {
        line-height: 12px;
        background: #2e63e7;
        text-transform: uppercase;
    }

    table.vitamins thead th {
        color: #fff;
        padding: 10px;
        letter-spacing: 1px;
        vertical-align: bottom;
    }

    table.vitamins thead th:nth-child(1) {
        width: 20%;
        text-align: left;
        padding-left: 20px;
    }

    table.vitamins thead th:nth-child(2) {
        width: 30%;
    }

    table.vitamins thead th:nth-child(3) {
        width: 35%;
    }

    table.vitamins thead th:nth-child(4) {
        width: 15%;
    }

    table.vitamins tbody {
        font-size: 1em;
        line-height: 15px;
    }

    table.vitamins tbody tr {
        border-top: 2px solid rgba(109, 176, 231, 0.8);
        transition: background 0.6s, color 0.6s;
    }

    table.vitamins tbody tr:nth-child(even) {
        background: rgba(255, 255, 255, 0.2);
    }

    table.vitamins tbody tr:hover {
        color: #000;
        background: rgba(255, 255, 255, 0.7);
        font-weight: 900;
    }

    table.vitamins tbody td {
        padding: 12px;
    }

    table.vitamins tbody tr:hover td:first-child {
        background: rgba(0,0,0,0);
    }

    table.vitamins tbody td:first-child {
        text-align: left;
        padding-left: 20px;
        font-weight: 700;
        background: rgba(109, 176, 231, 0.35);
        transition: backgrounf 0.6s;

    }

    table.vitamins tfoot {
        font-size: 0.8em;

    }

    table.vitamins tfoot tr {
        border-top: 2px solid #2e63e7;
    }

    table.vitamins tfoot td {
        color: rgba(255,255,215,0.6);
        text-align: left;
        line-height: 15px;
        padding: 15px 20px;
    }


    /* Mobile Layout */

    @media screen and (max-width: 400px) {
        h1 {
            font-size: 34px;
            line-height: 36px;
            padding-left: 15px;

        }

        article {
            margin: 10px 15px;
        }

        table.vitamins {
            font-size: 0.8em;
        }
    }
</style>
<style>
    .profile-container
    {
        margin-left: 200px ;
        margin-right: 0.25px;
    }
    .profile-container .profile-header .profile-stats .inlinestats-col:not(:last-child) {
        border-right: 1px solid #eee;
    }
    .profile-container .profile-header .profile-stats .inlinestats-col {
        padding-top: 15px;
        text-align: center;
        font-family: 'Lucida Sans','trebuchet MS',Arial,Helvetica;
        border-top: 1px solid #eee;
        min-height: 55px;
        margin: 50px auto;
    }
    .profile-container .profile-header .profile-stats .stats-col .stats-value {
        display: block;
        margin: 50px auto;
        text-align: center;
        font-size: 30px;
        font-family: 'Lucida Sans','trebuchet MS',Arial,Helvetica;
    }
    .pink {
        margin-right: 20px;
        color: #e75b8d!important;

    }
    .profile-container .profile-header .profile-stats .stats-col:not(:last-child) {
        border-right: 1px solid #eee;
    }
    .profile-container .profile-header .profile-stats .stats-col {
        margin: 50px auto;
        text-align: center;
    }
    .profile-container .profile-header .profile-stats {
        min-height: 175px;
        margin: 50px auto;
        border-right: 1px solid #eee;
    }
    .profile-container .profile-header .profile-info .header-information {
        line-height: 23px;
        margin: 50px auto;
        text-align: justify;
    }
    .profile-container .profile-header .profile-info .btn-follow {
        /*    position: absolute;
            top: 45px;
            right: 40px;*/
    }
    .btn-palegreen, .btn-palegreen:focus {
        background-color: #a0d468!important;
        border-color: #a0d468;
        color: #fff;
    }
    .profile-container .profile-header .profile-info .header-fullname {
        font: 21px 'Lucida Sans','trebuchet MS',Arial,Helvetica;
        margin-top: 27px;
        display: inline-block;

    }
    .profile-container .profile-header .profile-info {
        min-height: 175px;
        border-right: 1px solid #eee;
        padding-top: 15px;
        padding-bottom: 35px;

    }
    .profile-container .profile-header .header-avatar {
        width: 125px;
        height: 125px;
        -webkit-border-radius: 50%;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 50%;
        -moz-background-clip: padding;
        border-radius: 50%;
        background-clip: padding-box;
        border: 5px solid #f5f5f5;
        -webkit-box-shadow: 0 0 10px rgba(0,0,0,.15);
        -moz-box-shadow: 0 0 10px rgba(0,0,0,.15);
        box-shadow: 0 0 10px rgba(0,0,0,.15);
        margin: 25px auto;

    }


    .profile-container .profile-header {

        min-height: 175px;
        margin: 15px 15px 0;

        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.35);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.35);
        box-shadow: 0 1px 2px rgba(0,0,0,.35);
        background-color: #fbfbfb;

    }
</style>
@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="card-header card-header-icon" data-background-color="orange">
                    <a class="material-icons" href="{{ route('emp.index') }}">keyboard_return</a>
                </div>
            </div>




            <center>
                <div class="container ">
                    <div class="col-md-8 ">
                        <div class="profile-container ">
                            <div class="profile-header row">

                                <div class="col-md-12 col-sm-12 text-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6bPf2afElK6D7zeWM0U2AEa9EIrxspG6eELObvQREvhtg5gSyrw" alt="" class="header-avatar">
                                </div>
                                <div class="col-md-12 col-sm-12 profile-info">
                                    <div class="row">
                                        <div class="col-md-11">

                                        </div>



                                    </div>



                                    <table>
                                        <div class="row">
                                            <center>
                                                <div class="row">

                                                    <tr><td><label class="stats-value pink">Nom client :</label></td>
                                                        <td>  <label class="stats-title">{{ $intervention->clients->nom }} {{ $intervention->clients->prenom }}</label></td>
                                                    </tr>
                                                    <tr><td><label class="stats-value pink">Identifiant :</label></td>
                                                        <td>  <label class="stats-title">{{ $intervention->clients->Identifion }}</label></td>
                                                    </tr>
                                                    <br>
                                                    <tr><td> <label class="stats-value pink">Nom du l'employer :</label></td>
                                                        <td>   <label class="stats-title">{{ $intervention->employers->Nom }} {{ $intervention->employers->Prenom }}</label></td> </tr>
                                                    <tr><td> <label class="stats-value pink">titre de l'intervention</label></td>
                                                        <td>   <label class="stats-title">{{$intervention->Titre}}</label></td> </tr>
                                                    <tr><td> <label class="stats-value pink">Date debut</label></td>
                                                        <td>   <label class="stats-title">{{$intervention->dateD}}</label></td> </tr>
                                                    <tr><td> <label class="stats-value pink">Date fin</label></td>
                                                        <td>   <label class="stats-title">{{$intervention->dateF}}</label></td> </tr>
                                                    <tr><td> <label class="stats-value pink">Date Prochaine visite</label></td>
                                                        <td>   <label class="stats-title">{{$intervention->dateR}}</label></td> </tr>
                                                    <tr><td> <label class="stats-value pink">Commentaire</label></td>
                                                        <td>   <label class="stats-title">{{$intervention->Commentaire}}</label></td> </tr>
                                                </div>
                                            </center>
                                        </div>
                                        <br>




                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </center>
        </div>


        </div>
        </div>

    </section>
@endsection