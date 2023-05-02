@extends('layouts.app')

@section('content')
<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
    a:link { text-decoration: none; }
    a:visited { text-decoration: none; }
    a:hover { text-decoration: none; }
    a:active { text-decoration: none; }
    .cardbtn{
    display: flex;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.25);
    max-width: 260px;
    border-radius: 10px; 
    position: relative;
    margin: 15px;
    transition: 0.3s all ease-in-out;
    border:1px solid #eeeeee;
    }
    
    .cardbtn .icon{
        background-color: #000000; 
        color: #ffffff;
        font-size: 35px;
        border-top-left-radius: 10px; 
        border-bottom-left-radius: 10px; 
        box-shadow: 5px 0px 12px -4px rgba(0, 0, 0, 0.5);
        z-index: 1;
        /* margin-left: 10px; */
        /* align-items: center */
    }
    
   .cardbtn .text{
        background-color: #003B67;
        color: #ffffff;
        border-top-right-radius: 10px; 
        border-bottom-right-radius: 10px; 
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }

    /* .cardbtn .text p {
        align-items-center d-flex justify-content-center
        align-self: center;
    } */
    
    .badge{
        position: absolute;
        color: #003B67;
        background-color: #ffffff;
        box-shadow: inset 0px 0px 6px 6px #E0E0E0;
        font-weight: bold;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        padding: 5px;
        font-size: 20px;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1.5px solid #000000;
        top: -10px;
        left: -10px;
        z-index: 2;
    }
    
    .cardbtn :hover{
        box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
        cursor: pointer;
        
        /* .text{
        background-color: #29C1F4;
        background-image: radial-gradient(#96e1fa, #2ac1f4);
        color: #000000;
        } */
    }
    
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row d-flex justify-content-center">
                        <a class="cardbtn streched-link col-12 p-0" onclick="session(['halaman' => 'kurikulum']);" href="http://siska.stmikbandung.test:81/kurikulum">
                            <div class="col-4 icon">
                                <i class="fa-solid fa-person-chalkboard" style="margin-left: 20px"></i>
                            </div>
                            <div class="col-8 text">
                                Kurikulum
                            </div>
                        </a>
                    {{-- </div>

                    <div class="row"> --}}
                        <a class="cardbtn streched-link col-12 p-0" onclick="session(['halaman' => 'mahasiswa']);" href="http://siska.stmikbandung.test:81/mahasiswa">
                            <div class="col-4 icon">
                                <i class="fa-solid fa-user-graduate" style="margin-left: 20px"></i>
                            </div>
                            <div class="col-8 text">
                                Mahasiswa
                            </div>
                        </a>
                    {{-- </div>

                    <div class="row"> --}}
                        <a class="cardbtn streched-link col-12 p-0" onclick="session(['halaman' => 'evaluasi']);" href="http://siska.stmikbandung.test:81/evaluasi">
                            <div class="col-4 icon">
                                <i class="fa-solid fa-book-open" style="margin-left: 20px"></i>
                            </div>
                            <div class="col-8 text">
                                Evaluasi
                            </div>
                        </a>
                    </div>

                        {{-- <a href="http://siska.stmikbandung.test:81/kurikulum" class="btn">Kurikulum</a>
                        <a href="http://siska.stmikbandung.test:81/mahasiswa" class="btn">Mahasiswa</a>
                        <a href="http://siska.stmikbandung.test:81/evaluasi" class="btn">Evaluasi</a> --}}
                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript">
        function setCookie(cname, cvalue) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
            sessionStorage.setItem(cname, cvalue);
        }
        var cookieString = getCookie("halaman");
        if(cookieString == "yes"){
        alert('gut')
        }
    </script>
    @endpush
