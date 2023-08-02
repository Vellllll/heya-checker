<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/hospital.css')}}">
    <title>Hospital List</title>
</head>
<body>
    @include('layouts.navigation')

    <div class="hospital-navigation">
        <h1>Hospital List</h1>
        <p><i class="fa-solid fa-arrow-down"></i> Search down here <i class="fa-solid fa-arrow-down"></i></p>
        <form class="d-flex" role="search" id="formSearch" method="get" action="hospital.html">
            <input class="form-control me-2" onkeyup="search_hospital_name()" id="hospitalSearchName" type="search" placeholder="Search hospital by name...." aria-label="Search">

            <!-- <button class="btn btn-outline-primary" type="submit" onclick="search_hospital()" id="searchButton">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button> -->
        </form>
        <button class="btn btn-warning add-hospital-button admin-button" onclick="window.location.href='{{'addhospital'}}'" id="addhospital">
            <i class="fa-solid fa-plus"></i>
            Add Hospital
        </button>
    </div>

    @if (count($hospitals) == 0)
    <div class="hospital-list">
        <p>Tidak ada data hospital!</p>
    </div>
    @else
    @foreach($hospitals as $row)
    <div class="hospital-list">
        <div class="hospital-list-card">
            <a class="hospital-link" href="#">
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
                                <td class="hospital-button">
                                    <button class="btn btn-info edit-hospital-button admin-button" onclick="window.location.href='/edithospital/{{$row['id']}}'"><i class="fa-regular fa-pen-to-square"></i> Edit Hospital Data</button>
                                    <button class="btn btn-danger delete-hospital-button admin-button" onclick="window.location.href='/hospitaladmin/delete_hospital/{{$row['id']}}'"><i class="fa-solid fa-trash"></i> Delete Hospital</button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </a>
        </div>
    </div>
@endforeach

    @endif



    @include('Include.footer')

    @include('Include.script')

</body>
</html>
