<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/hospital.css')}}">
    @include('Include.head')
    <title>Hospital List</title>
</head>
<body>
    @include('layouts.navigation')
    <div class="hospital-navigation">
        <h1>Hospital List</h1>
        <p><i class="fa-solid fa-arrow-down"></i> Search down here <i class="fa-solid fa-arrow-down"></i></p>
        <form class="d-flex" role="search" id="formSearch" method="get" action="hospital.html">
            <input class="form-control me-2" onkeyup="search_hospital_name()" id="hospitalSearchName" type="search" placeholder="Search hospital by name...." aria-label="Search">
            {{-- <input class="form-control me-2" onkeyup="search_hospital_city()" id="hospitalSearchCity" type="search" placeholder="Search hospital by city...." aria-label="Search">
            <input class="form-control me-2" onkeyup="search_hospital_address()" id="hospitalSearchAddress" type="search" placeholder="Search hospital by address...." aria-label="Search"> --}}

            {{-- <button class="btn btn-outline-primary" type="submit" onclick="search_hospital()" id="searchButton">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button> --}}
        </form>
    </div>

    @foreach ($hospitals as $row)
        <div class="hospital-list">
            <div class="hospital-list-card">
                @if(Auth::user()==null)
                <a class="hospital-link" href="{{'login'}}">
                    <div class="hospital-card">
                        <table class="hospital-card-table">
                            <tbody>
                                <tr class="hospital-card-row">
                                    <td class="hospital-image">
                                        <img src = "{{asset('assets/img/hospital/'.$row->foto)}}">
                                    </td>
                                    <td class="hospital-info">
                                        <h2 class="hospital-name">{{$row['namarumahsakit']}}</h2>
                                        <h3 class="hospital-details">{{$row['kota']}}</h3>
                                        <h4 class="hospital-details">{{$row['alamat']}}</h4>
                                        <h4 class="hospital-details">No Telp : {{$row['notelp']}}</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
                @else
                <a class="hospital-link" href="/reservationhospital/{{$row['id']}}">
                    <div class="hospital-card">
                        <table class="hospital-card-table">
                            <tbody>
                                <tr class="hospital-card-row">
                                    <td class="hospital-image">
                                        <img src = "{{asset('assets/img/hospital/'.$row->foto)}}">
                                    </td>
                                    <td class="hospital-info">
                                        <h2 class="hospital-name">{{$row['namarumahsakit']}}</h2>
                                        <h3 class="hospital-details">{{$row['kota']}}</h3>
                                        <h4 class="hospital-details">{{$row['alamat']}}</h4>
                                        <h4 class="hospital-details">No Telp : {{$row['notelp']}}</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
                @endif
            </div>
        </div>
    @endforeach

    @include('Include.footer')

    @include('Include.script')

</body>
</html>
