<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/reservation.css')}}">
    <title>Reservation</title>
</head>
<body>
    @include('layouts.navigation')

    {{-- <div class="banner">
    </div> --}}

    <div class="reservation">
        <h2>Reservation Form</h2>
        <form action="/reservation_hospital_process" method="post" class="form-reservation">
        @csrf
            <div class="mb-3">
                <label for="inputFullName" class="form-label">Full Name :</label>
                <input type="text" class="reservation-form" name="inputFullName" id="inputFullName" placeholder="" value="{{Auth::user()->name}}" required>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">E-mail :</label>
                <input type="email" class="reservation-form" name="inputEmail" id="inputEmail" placeholder="youremail@email.com" value="{{Auth::user()->email}}" required>
            </div>
            <div class="mb-3">
                <label for="inputNumber" class="form-label">Phone Number :</label>
                <input type="text" class="reservation-form" name="inputNumber" id="inputNumber" placeholder="08xxxxxxxxxx" required maxlength="15">
            </div>
            <div class="mb-3">
                <label for="inputDateOfBirth" class="form-label">Date of Birth :</label>
                <input type="date" class="reservation-form" name="inputDateOfBirth" id="inputDateOfBirth" required>
            </div>
            <div class="mb-3">
                <label for="inputGender" class="form-label">Gender :</label>
                <select class="select-reservation-form" name="inputGender" id="inputGender" aria-label="Default select example">
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputBloodType" class="form-label">Blood Type :</label>
                <select class="select-reservation-form" name="inputBloodType" id="inputBloodType" aria-label="Default select example">
                    <option value="A">A</option>
                    <option value="AB">AB</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputCity" class="form-label">Your City :</label>
                <input type="text" class="reservation-form" name="inputCity" id="inputCity" aria-label="Default select example">
            </div>
            <div class="mb-3">
                <label for="inputAddress" class="form-label">Address :</label>
                <textarea class="reservation-form" name="inputAddress" id="inputAddress" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="inputHospital" class="form-label">Hospital :</label>
                <select class="select-reservation-form" name="inputHospital" id="inputHospital" aria-label="Default select example">
                    @foreach ($hospitals as $row)
                    <option value="{{$row['namarumahsakit']}}">{{$row['namarumahsakit']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="inputClass" class="form-label">Room Class :</label>
                <select class="select-reservation-form" name="inputClass" id="inputClass" aria-label="Default select example">
                    <option value="1">1st Class</option>
                    <option value="2">2nd Class</option>
                    <option value="3" selected>3rd Class (Reguler)</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputMedicForm" class="form-label">Medical Form :</label>
                <input class="reservation-form form-control" type="file" name="inputMedicForm" id="inputMedicForm" required>
            </div>
            <button class="button" type="submit button" id="submit">Submit</button>
        </form>
    </div>

    {{-- <div class="alert-box">
        <div class="alert-box-content">
            <i class="fas fa-solid fa-check check"></i>
            <div class="message">
                <span class="text text-1">Success!</span>
                <span class="text text-2">Your reservation has been recorded.</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>
        <div class="progress"></div>
    </div> --}}

    @include('Include.footer')

    @include('Include.script')
</body>
</html>
