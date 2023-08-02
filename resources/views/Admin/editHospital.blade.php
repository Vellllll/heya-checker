<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/editHospital.css')}}">
    <title>Edit Hospital</title>
</head>
<body>
    {{-- <div class="banner">
    </div> --}}

    <div class="hospital-data">
        <h2>Edit Hospital's Data</h2>
        <form action="/edit_hospital_process/{{$hospitals->id}}" method="post" class="edit-hospital-form">
            @csrf
            {{-- <div class="mb-3">
                <label for="inputHospitalCode" class="form-label">Hospital Code :</label>
                <input type="text" class="edit-hospital-input" name="inputHospitalCode" id="inputHospitalCode" value="{{$hospitals['koderumahsakit']}}" required>
            </div> --}}
            <div class="mb-3">
                <label for="inputHospitalName" class="form-label">Hospital Name :</label>
                <input type="text" class="edit-hospital-input" name="inputHospitalName" id="inputHospitalName" value="{{$hospitals['namarumahsakit']}}" required>
            </div>
            <div class="mb-3">
                <label for="inputHospitalCity" class="form-label">City :</label>
                <input type="text" class="edit-hospital-input" name="inputHospitalCity" id="inputHospitalCity" value="{{$hospitals['kota']}}" required>
            </div>
            <div class="mb-3">
                <label for="inputHospitalAddress" class="form-label">Address :</label>
                <input type="text" class="edit-hospital-input" name="inputHospitalAddress" id="inputHospitalAddress" value="{{$hospitals['alamat']}}" required>
            </div>
            <div class="mb-3">
                <label for="inputHospitalNumber" class="form-label">Contact Number :</label>
                <input type="text" class="edit-hospital-input" name="inputHospitalNumber" id="inputHospitalNumber" value="{{$hospitals['notelp']}}" required maxlength="15">
            </div>
            <div class="mb-3">
                <label for="inputHospitalImage" class="form-label">Image :</label>
                <input type="file" class="edit-hospital-input form-control" name="inputHospitalImage" id="inputHospitalImage" value="" required>
            </div>
            <button class="button" type="submit">Edit!</button>
        </form>

    </div>

    <div class="back-button">
        <button type="button" onclick="window.location.href='{{ route('hospitaladmin') }}'" id="back">Back</button>
    </div>

    {{-- <div class="banner">
    </div> --}}
</body>
</html>
