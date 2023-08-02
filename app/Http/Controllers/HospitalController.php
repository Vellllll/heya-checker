<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Reservation;
use App\Models\Help;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index(){
        $hospitals = Hospital::getAllHospital();

        return view ('Hospital.hospital', ['hospitals' => $hospitals]);
    }

    public function reservation_hospital($id){
        $hospitals = Hospital::getHospitalDetail($id);
        return view ('Hospital.reservationhospital', ['hospitals' => $hospitals]);
    }

    public function reservation_hospital_index(){
        $hospitals = Hospital::getAllHospital();
        return view ('reservation', ['hospitals' => $hospitals]);
    }

    public function reservation_hospital_process(Request $request){
        $namalengkap = $request->input('inputFullName');
        $email = $request->input('inputEmail');
        $notelp = $request->input('inputNumber');
        $date = $request->input('inputDateOfBirth');
        $gender = $request->input('inputGender');
        $blood = $request->input('inputBloodType');
        $city = $request->input('inputCity');
        $address = $request->input('inputAddress');
        $hospital = $request->input('inputHospital');
        $room = $request->input('inputClass');
        $form = $request->input('inputMedicForm');
        $reservations = new Reservation();
        $reservations -> namalengkap = $namalengkap;
        $reservations -> email = $email;
        $reservations -> notelp = $notelp;
        $reservations -> tanggallahir = $date;
        $reservations -> jeniskelamin = $gender;
        $reservations -> goldarah = $blood;
        $reservations -> kota = $city;
        $reservations -> alamat = $address;
        $reservations -> namarumahsakit = $hospital;
        $reservations -> kamarid = $room;
        $reservations -> rekammedis = $form;
        $reservations -> save();

        return redirect()->route('reservation');
    }

    public function help_hospital_process(Request $request){
        $namalengkap = $request->input('inputName');
        $email = $request->input('inputEmail');
        $notelp = $request->input('inputPhoneNumber');
        $message = $request->input('inputMessage');

        $helps = new Help();
        $helps -> user_id = $namalengkap;
        $helps -> email = $email;
        $helps -> notelp = $notelp;
        $helps -> pesan = $message;
        $helps -> save();

        return redirect()->route('help');
    }
}
