<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Heya Checker</title>
</head>
<body>
    @include('layouts.navigation')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item carousel-item-1 active" data-bs-interval="5000">
            <div class="carousel-text">
                <h1>HeyaChecker</h1>
                <p>Welcome to HeyaChecker, We're so glad you're here! You are now part of a New Era of Digitalization of Medicine across Indonesia. We, HeyaChecker hoping that we can be the one part of the website that will be the savior of everyone who needs medical help. Have a nice day!</p>
                <button class="button" onclick="window.location.href='{{('login')}}'">Get Started!</button>
            </div>
          </div>
          <div class="carousel-item carousel-item-2" data-bs-interval="5000">
            <div class="carousel-text">
                <h1>Hi, Do you need any help?</h1>
                <p>Thank you for being a part of us! Are you having any trouble? We will always be happy to assist you, please feel free to contact our team if you need help for further explanation!  </p>
                <button class="button" onclick="window.location.href='{{route('dashboard')}}#social-media'">Contact Us!</button>
            </div>
          </div>
          <div class="carousel-item carousel-item-3" data-bs-interval="5000">
            <div class="carousel-text">
                <h1>Hi, thank you for using us for your health needs</h1>
                <p>Please feel free to try our service, HeyaChecker is ready to provide service with the best selection of hospital rooms from all over Indonesia.</p>
                @if (Auth::user() == null)
                    <button class="button" onclick="window.location.href='{{'login'}}'">Serve Now!</button>
                @elseif (Auth::user()->username=='admin')
                    <button class="button" onclick="window.location.href='{{route('Admin.manageReservation')}}'">Manage Reservation</button>
                @else
                    <button class="button" onclick="window.location.href='{{'reservation'}}'">Serve Now!</button>
                @endif
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card" id="card">
        <div class="page-contain">
            <a class="data-card hospital-card">
                <h2><i class="fa-solid fa-hospital"></i><span> Hospital</span></h2>
                <p>We have collaborated with 40 of the best hospitals in Indonesia, we hope that there are suitable hospital facilities to be your choice! We will strive to cooperate with more hospitals in Indonesia!</p>
                @if(Auth::user() == null)
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('hospital')}}'">View Hospital</button>
                @elseif(Auth::user()->username=='admin')
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('hospitaladmin')}}'">View Hospital</button>
                @else
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('hospital')}}'">View Hospital</button>
                @endif
            </a>
            <a class="data-card reservation-card">
                <h2><i class="fa-solid fa-bed"></i><span> Reservation</span></h2>
                <p>The first step in planning an event is to reserve a room. HeyaChecker has collaborated with 40 of the best hospitals in Indonesia by having the best room facilities. To book a room, press me immediately. </p>
                @if(Auth::user() == null)
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('login')}}'">Reserve</button>
                @elseif(Auth::user()->username=='admin')
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('Admin.manageReservation')}}'">Manage reservation</button>
                @else
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('reservation')}}'">Reserve</button>
                @endif
            </a>
            <a href="https://www.halodoc.com/tanya-dokter" target="_blank" class="data-card consultation-card">
                <h2><i class="fa-solid fa-user-doctor"></i><span> Consultation</span></h2>
                <p>We have also collaborated with Halodoc, Halodoc has provided more than 100 trusted and certified doctors, immediately consult all disease complaints by pressing me </p>
                <button type="button" class="btn btn-outline-warning">View HaloDoc</button>

            </a>
            <a class="data-card help-card">
                <h2><i class="fa-solid fa-circle-question"></i><span> Help</span></h2>
                <p>Team Heyachecker is always happy and responsive to serve those of you who need more explanations, feel free to press me to ask us anything you want to ask.</p>
                @if(Auth::user()==null)
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('login')}}'">Click for help!</button>
                @elseif(Auth::user()->username=='admin')
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('Admin.manageHelp')}}'">Manage help</button>
                @else
                    <button type="button" class="btn btn-outline-warning" onclick="window.location.href='{{route('help')}}'">Click for help!</button>
                @endif
            </a>
        </div>
        {{-- <table class="card-table">
            <tbody>
                <tr class="card-table-row card-table-row-1">
                    <td class="card-table-cell card-table-cell-1">
                        @if(Auth::user() == null)
                            <a href="{{route('hospital')}}" class="card-link">
                                <div class="card-content card-content-1 card-image-hospital">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-hospital"></i><span>Hospital</span></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, accusantium!</p>
                                    </div>
                                </div>
                            </a>
                        @elseif(Auth::user()->username=='admin')
                            <a href="{{route('hospitaladmin')}}" class="card-link">
                                <div class="card-content card-content-1 card-image-hospital">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-hospital"></i><span>Hospital</span></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, accusantium!</p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{route('hospital')}}" class="card-link">
                                <div class="card-content card-content-1 card-image-hospital">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-hospital"></i><span>Hospital</span></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, accusantium!</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </td>
                    <td class="card-table-cell card-table-cell-2">
                        @if(Auth::user() == null)
                            <a href="{{route('login')}}" class="card-link">
                                <div class="card-content card-content-1 card-image-reservation">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-bed"></i><span>Reservation</span></h2>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, molestias.</p>
                                    </div>
                                </div>
                            </a>
                        @elseif(Auth::user()->username=='admin')
                            <a href="{{route('Admin.manageReservation')}}" class="card-link">
                                <div class="card-content card-content-1 card-image-reservation">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-bed"></i><span>Reservation</span></h2>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, molestias.</p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{route('reservation')}}" class="card-link">
                                <div class="card-content card-content-1 card-image-reservation">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-bed"></i><span>Reservation</span></h2>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, molestias.</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </td>
                </tr>
                <tr class="card-table-row card-table-row-2">
                    <td class="card-table-cell card-table-cell-1">
                        <a href="https://www.halodoc.com/tanya-dokter" target="_blank" class="card-link">
                            <div class="card-content card-content-1 card-image-consultation">
                                <div class="card-text">
                                    <h2><i class="fa-solid fa-user-doctor"></i><span>Consultation</span></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, voluptates.</p>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="card-table-cell card-table-cell-2">
                        @if(Auth::user()==null)
                            <a href="{{route('login')}}" class="card-link">
                                <div class="card-content card-content-2 card-image-help">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-circle-question"></i><span>Help</span></h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, aliquid?</p>
                                    </div>
                                </div>
                            </a>
                        @elseif(Auth::user()->username=='admin')
                            <a href="{{route('Admin.manageHelp')}}" class="card-link">
                                <div class="card-content card-content-2 card-image-help">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-circle-question"></i><span>Help</span></h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, aliquid?</p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{route('help')}}" class="card-link">
                                <div class="card-content card-content-2 card-image-help">
                                    <div class="card-text">
                                        <h2><i class="fa-solid fa-circle-question"></i><span>Help</span></h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, aliquid?</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table> --}}
    </div>

    <div class="privileges" id="privileges">
        <div class="privileges-section">
            <div class="privileges-card">
                <img src="{{asset('assets/img/privileges/addfriend.png')}}" alt="">
                <h3>Friendly & Safety</h3>
                <p>We HeyaChecker Team will always be happy and friendly to those of you who want to need our help, we will also take your personal data seriously to the best of our capabilities, because your comfort and security is our happiness.</p>
            </div>
            <div class="privileges-card">
                <img src="{{asset('assets/img/privileges/time.png')}}" alt="">
                <h3>Fast Respon</h3>
                <p>HeyaChecker will always try to provide the best service with all our capabilities, we will receive positively and always respond quickly to all your inquiries and orders</p>
            </div>
            <div class="privileges-card">
                <img src="{{asset('assets/img/privileges/file.png')}}" alt="">
                <h3>High Accurate</h3>
                <p>The accuracy of the data is our guideline, you don't need to worry about the information that has been listed on Heyachecker because all the information we provide has been verified by the Indonesian government and we have been recognized by various government and private institutions that have been certified.</p>
            </div>
        </div>
        {{-- <table class="privilege-table">
            <tbody>
                <tr class="privilege-row">
                    <td class="privilege-cell">
                        <img src="{{asset('assets/img/privileges/addfriend.png')}}" alt="">
                        <h3>Friendly & Safety</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus animi hic explicabo quae accusantium pariatur nulla similique, laboriosam dolores voluptate.</p>
                    </td>
                    <td class="privilege-cell">
                        <img src="{{asset('assets/img/privileges/time.png')}}" alt="">
                        <h3>Fast Respon</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error magni neque iure deleniti autem corporis architecto laudantium dolorum nam soluta.</p>
                    </td>
                    <td class="privilege-cell">
                        <img src="{{asset('assets/img/privileges/file.png')}}" alt="">
                        <h3>High Accurate</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos veniam libero facilis ipsa cumque iste praesentium. Quis aspernatur reiciendis eos.</p>
                    </td>
                </tr>
            </tbody>
        </table> --}}
    </div>

    <div class="supported-section">
        <div class="supported-icon">
            <h2>Supported By</h2>
            <div class="owl-carousel" id="carousel-logo">
                <div class="icon"><img src="{{asset('assets/img/sponsored/bpjs.png')}}" alt=""></div>
                <div class="icon"><img src="{{asset('assets/img/sponsored/Halodoc.png')}}" alt=""></div>
                <div class="icon"><img src="{{asset('assets/img/sponsored/Kominfo.png')}}" alt=""></div>
                <div class="icon"><img src="{{asset('assets/img/sponsored/Logo Kemenkes Kementerian Kesehatan.png')}}" alt=""></div>
                <div class="icon"><img src="{{asset('assets/img/sponsored/Logo PeduliLindungi [laluahmad.com].png')}}" alt=""></div>
            </div>
        </div>
    </div>

    @include('Include.footer')

    @include('Include.script')

</body>

</html>
