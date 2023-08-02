<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/addHospital.css')}}">
    <title>Edit Hospital</title>
</head>
<body>
    {{-- <div class="banner">
    </div> --}}

    <div class="hospital-data">
        <h2>Add New Hospital</h2>
        <form action="/add_hospital_process" method="post" class="add-hospital-form">
            @csrf
            {{-- <div class="mb-3">
                <label for="inputHospitalCode" class="form-label">Hospital Code :</label>
                <input type="text" class="add-hospital-input" name="inputHospitalCode" id="inputHospitalCode" placeholder="Hospital's Code"  required>
            </div> --}}
            <div class="mb-3">
                <label for="inputHospitalName" class="form-label">Hospital Name :</label>
                <input type="text" class="add-hospital-input" name="inputHospitalName" id="inputHospitalName" placeholder="Hospital's Name" required>
            </div>
            <div class="mb-3">
                <label for="inputHospitalCity" class="form-label">City :</label>
                <input type="text" class="add-hospital-input" name="inputHospitalCity" id="inputHospitalCity" placeholder="Hospital's City" required>
            </div>
            <div class="mb-3">
                <label for="inputHospitalAddress" class="form-label">Address :</label>
                <input type="text" class="add-hospital-input" name="inputHospitalAddress" id="inputHospitalAddress" placeholder="Hospital's Address" required>
            </div>
            <div class="mb-3">
                <label for="inputHospitalNumber" class="form-label">Contact Number :</label>
                <input type="text" class="add-hospital-input" name="inputHospitalNumber" id="inputHospitalNumber" placeholder="Hospital's Contact Number" required maxlength="15">
            </div>
            <div class="mb-3">
                <label for="inputHospitalImage" class="form-label">Image :</label>
                <input type="file" class="add-hospital-input form-control" name="inputHospitalImage" id="inputHospitalImage" placeholder="" required>
            </div>
            <button class="button" type="submit">Add!</button>
        </form>
    </div>

    <div class="back-button">
        <button type="button" onclick="window.location.href='{{ route('hospitaladmin') }}'" id="back">Back</button>
    </div>

    {{-- <div class="banner">
    </div> --}}
</body>
</html>
