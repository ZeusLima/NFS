@extends('layouts.main_layout')
@section('content')

    <div style="border: 0px dotted rgb(47, 241, 255);">
        <div class="container-fluid">

            <div class="row" > <!--content -->

                <div class="col-md-4" id="left_collum_login">           <!-- left collum-->

                    <div class="row justify-content-evenly img_logo" style="border: 0x solid red;" >
                        <img id="logo_login_pg" src="{{ asset('assets/LogoNFS-FundoBranco.png')}}" alt="Logo NFS">
                    </div>

                    <div class="row justify-content-evenly" style="border: px solid red;">

                            <form style="padding: 10%;" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-3 col">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control" placeholder="insira seu e-mail">
                                </div>

                                <div class="mb-3 col">
                                    <label class="form-label">Senha</label>
                                    <input type="password" class="form-control" placeholder="insira sua senha">

                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <input type="checkbox">Lembrar-me
                                    </div>

                                    <div class="col-6">
                                        <a href="#">Esqueceu a senha?</a>
                                    </div>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-success">Log In</button>
                                    </div>

                                </div>


                                <div class="social_login">
                                    <div class="d-flex gap-3 justify-content-evenly">
                                        <button class="flex-grow-1 btn-google btn">
                                            <i class="fab fa-google"></i> Google
                                        </button>

                                        <button class="flex-grow-1 btn-facebook btn">
                                            <i class="fab fa-facebook-f"></i> Facebook
                                        </button>

                                        <button class="flex-grow-1 btn-apple btn">
                                            <i class="fab fa-apple"></i> Apple
                                        </button>

                                    </div>
                                </div>

                            </form>


                            <div class="row justify-content-evenly" style="border: 0px solid orange;">
                        <div class="col-auto">
                            <a href="{{  url('register') }} ">Solicite Acesso e Agende sua aula!</a>
                        </div>
                    </div>

                    </div>



                </div>                                                  <!-- end of the left collum-->

                <div class="col-md-8 " >         <!--right collum-->
                    <div class="teste" ></div>
                </div>
            </div>

        </div>

    </div>
@endsection
