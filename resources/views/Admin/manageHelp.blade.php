<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/manageHelp.css')}}">
    <title>Manage Help</title>
</head>
<body>
    <!-- <div class="navigation-bar">
        <nav>
            <div class="logo">
                <a href="../index.html">
                    <i class="fa-solid fa-stethoscope"></i>
                    <span class="heya fs-3">Heya</span><span class="checker fs-3">Checker</span>
                </a>
            </div>

            <ul class="nav-list">
                <a href="../index.html"><li class="nav-item">Home</li></a>
                <a href="../index.html#card"><li class="nav-item">Services</li></a>
                <a href="../index.html#privileges"><li class="nav-item">Privileges</li></a>
                <a href="help.html"><li class="nav-item">Connect with us!</li></a>
            </ul>
        </nav>
    </div> -->

    {{-- <div class="banner">
    </div> --}}

    <div class="help-navigation">
        <h2>Help List</h2>
        <p><i class="fa-solid fa-arrow-down"></i> Search down here <i class="fa-solid fa-arrow-down"></i></p>
        <form class="d-flex" role="search" id="formSearch" method="get" action="hospital.html">
            <input class="form-control me-2" onkeyup="username_search()" id="usernameSearch" type="search" placeholder="Search username...." aria-label="Search">
            {{-- <input class="form-control me-2" onkeyup="email_search()" id="emailSearch" type="search" placeholder="Search email...." aria-label="Search">
            <input class="form-control me-2" onkeyup="date_search()" id="dateSearch" type="search" placeholder="Search date...." aria-label="Search"> --}}

            <!-- <button class="btn btn-outline-primary" type="submit" onclick="search_hospital()" id="searchButton">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button> -->
        </form>
    </div>

    <div class="help-list">
        <table class="help-table" id="help-table">
            <thead>
                <th class="help-head">#</th>
                <th class="help-head">Username</th>
                <th class="help-head">E-mail</th>
                <th class="help-head">Phone Number</th>
                <th class="help-head">Messages</th>
                <th class="help-head">Date</th>
                <th class="help-head">Status</th>

            </thead>
            <?php $i = 1; ?>
            @if (count($helps) == 0)
            <tbody>
                <tr class="help-cell">
                    <td class="help-cell" style="text-align: center" colspan="7">Tidak ada data help!</td>
                </tr>
            </tbody>

            @else
            @foreach ($helps as $rows)
            <tbody>
                <tr class="help-row">
                    <td class="help-cell id">{{$i++}}</td>
                    <td class="help-cell username">{{$rows['user_id']}}</td>
                    <td class="help-cell email">{{$rows['email']}}</td>
                    <td class="help-cell phone-number">{{$rows['notelp']}}</td>
                    <td class="help-cell messages">{{$rows['pesan']}}</td>
                    <td class="help-cell date">{{$rows['created_at']}}</td>
                    <td class="help-cell status">
                        <button class="button delete btn btn-sm btn-success" type="button" onclick="window.location.href='{{route('add_delete', $rows['id'])}}'">
                            <i class="fa-solid fa-check"></i> Accept
                        </button>
                    </td>
                </tr>
            </tbody>
            @endforeach
            @endif
        </table>
    </div>

    <div class="help-done-list">
        <div class="help-done-card">
            <h4>Help Done List</h4>
            <table class="help-table" id="help-table">
                <thead>
                    <th class="help-head">#</th>
                    <th class="help-head">Username</th>
                    <th class="help-head">E-mail</th>
                    <th class="help-head">Phone Number</th>
                    <th class="help-head">Messages</th>
                    <th class="help-head">Date</th>
                    <th class="help-head">Status</th>
                </thead>
                <?php $i = 1 ?>
                @if (count($helpdone) == 0)
                <tbody>
                    <tr class="help-cell">
                        <td class="help-cell" style="text-align: center" colspan="7">Tidak ada data help selesai!</td>
                    </tr>
                </tbody>
                @else
                @foreach ($helpdone as $row)
                <tbody>
                    <tr class="help-row">
                        <td class="help-cell id">{{$i++}}</td>
                        <td class="help-cell username">{{$row['user_id']}}</td>
                        <td class="help-cell email">{{$row['email']}}</td>
                        <td class="help-cell phone-number">{{$row['notelp']}}</td></td>
                        <td class="help-cell messages">{{$row['pesan']}}</td>
                        <td class="help-cell date">{{$row['created_at']}}</td>
                        <td class="help-cell status">
                            <i class="fa-solid fa-check"></i> Accepted
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
