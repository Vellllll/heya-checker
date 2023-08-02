<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/manageReservation.css')}}">
    <title>Manage Reservation</title>
</head>
<body>
    {{-- <div class="banner">
    </div> --}}

    <div class="reservation-navigation">
        <h2>Reservation List</h2>
        <p><i class="fa-solid fa-arrow-down"></i> Search down here <i class="fa-solid fa-arrow-down"></i></p>
        <form class="d-flex" role="search" id="formSearch" method="get" action="hospital.html">
            <input class="form-control me-2" onkeyup="reservator_search()" id="reservatorSearch" type="search" placeholder="Search reservation by reservator...." aria-label="Search">
            {{-- <input class="form-control me-2" onkeyup="hospital_search()" id="hospitalNameSearch" type="search" placeholder="Search reservation by hospital...." aria-label="Search">
            <input class="form-control me-2" onkeyup="date_search()" id="dateSearch" type="search" placeholder="Search reservation by date...." aria-label="Search"> --}}
        </form>
    </div>

    <div class="reservation-list">
        <table class="reservation-table" id="reservation-table">
            <thead>
                <th class="reservation-head">#</th>
                <th class="reservation-head">Reservator</th>
                <th class="reservation-head">Hospital's Name</th>
                <th class="reservation-head">Address</th>
                <th class="reservation-head">Phone Number</th>
                <th class="reservation-head">Reservation Date</th>
                <th class="reservation-head">Check</th>
            </thead>
            <?php $i = 1; ?>
            @if (count($reservations) == 0)
                <tbody>
                    <tr class="reservation-row">
                        <td class="reservation-cell" style="text-align: center" colspan="7">Tidak ada data reservasi!</td>
                    </tr>
                </tbody>
            @else
            @foreach ($reservations as $row)
            <tbody>
                <tr class="reservation-row">
                    <td class="reservation-cell id">{{$i++}}</td>
                    <td class="reservation-cell reservator">{{$row['namalengkap']}}</td>
                    <td class="reservation-cell hospital">{{$row['namarumahsakit']}}</td>
                    <td class="reservation-cell address">{{$row['alamat']}}</td>
                    <td class="reservation-cell phone-number">{{$row['notelp']}}</td>
                    <td class="reservation-cell reservation-date">{{$row[('created_at')]}}</td>
                    <td class="reservation-cell check-button">
                        <button class="button done btn btn-sm btn-success" type="button" onclick="window.location.href='{{route('add_done', $row['id'])}}'">
                            <i class="fa-solid fa-check"></i> Done
                        </button>
                    </td>
                </tr>
            </tbody>
            @endforeach
            @endif

        </table>
    </div>

    <div class="reservation-done-list">
        <div class="reservation-done-card">
            <h4>Reservation Done List</h4>
            <table class="reservation-table" id="reservation-table">
                <thead>
                    <th class="reservation-head">#</th>
                    <th class="reservation-head">Reservator</th>
                    <th class="reservation-head">Hospital's Name</th>
                    <th class="reservation-head">Address</th>
                    <th class="reservation-head">Phone Number</th>
                    <th class="reservation-head">Reservation Date</th>
                    <th class="reservation-head">Status</th>
                </thead>
                <?php $i = 1 ?>
                @if (count($reservationdone) == 0)
                <tbody>
                    <tr class="reservation-row">
                        <td class="reservation-cell" style="text-align: center" colspan="7">Tidak ada data reservasi selesai!</td>
                    </tr>
                </tbody>
                @else
                @foreach ($reservationdone as $row)
                <tbody>
                    <tr class="reservation-row">
                        <td class="reservation-cell id">{{$i++}}</td>
                        <td class="reservation-cell reservator">{{$row['namalengkap']}}</td>
                        <td class="reservation-cell hospital">{{$row['namarumahsakit']}}</td>
                        <td class="reservation-cell address">{{$row['alamat']}}</td>
                        <td class="reservation-cell phone-number">{{$row['notelp']}}</td>
                        <td class="reservation-cell reservation-date">{{$row[('created_at')]}}</td>
                        <td class="reservation-cell status">
                            <i class="fa-solid fa-check"></i> DONE
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @endif

            </table>
        </div>
    </div>

    <div class="back-button">
        <button type="button" onclick="window.location.href='{{ route('dashboard') }}'" id="back">Back</button>
    </div>

    {{-- <div class="banner">
    </div> --}}

    @include('Include.script')

</body>
</html>
