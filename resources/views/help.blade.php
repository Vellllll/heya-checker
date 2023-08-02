<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Include.head')
    <link rel="stylesheet" href="{{asset('assets/css/help.css')}}">
    <title>Help</title>
</head>
<body>
    @include('layouts.navigation')

    {{-- <div class="banner">
    </div> --}}

    <div class="help">
        <h2>Want to know more about us?</h2>
        <form action="/help_hospital_process" method="post">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label">Full Name :</label>
                <input type="text" class="help-input" name="inputName" id="inputName" placeholder="username" value="{{Auth::user()->name}}" required>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">E-mail :</label>
                <input type="email" class="help-input" name="inputEmail" id="inputEmail" placeholder="email" value="{{Auth::user()->email}}" required>
            </div>
            <div class="mb-3">
                <label for="inputPhoneNumber" class="form-label">Phone Number :</label>
                <input type="text" class="help-input" name="inputPhoneNumber" id="inputPhoneNumber" placeholder="phone_number" required maxlength="15">
            </div>
            <div class="mb-3">
                <label for="inputMessage" class="form-label">Your Messages :</label>
                <textarea class="help-input" name="inputMessage" id="inputMessagee" rows="3" required></textarea>
            </div>
            <button class="button" type="submit button">Send!</button>
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

    <div class="sponsored">
        <!-- <h3>Supported by</h3> -->
        <table class="sponsored-table">
            <tbody>
                <tr class="sponsored-row">
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/bpjs.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Halodoc.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Kominfo.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Logo Kemenkes Kementerian Kesehatan.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Logo PeduliLindungi [laluahmad.com].png" alt="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @include('Include.footer')

    @include('Include.script')

</body>
</html>
