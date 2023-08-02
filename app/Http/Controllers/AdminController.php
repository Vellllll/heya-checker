<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\ReservationDone;
use App\Models\Help;
use App\Models\HelpDone;
use App\Http\Middleware\AdminVerified;

class AdminController extends Controller
{
    public function indexadmin(){
        $hospitals = Hospital::getAllHospital();

        return view ('Admin.hospitaladmin', ['hospitals' => $hospitals]);
    }

    public function add_hospital_process(Request $request){
        // $id = $request->input('inputHospitalCode');
        $namarumahsakit = $request->input('inputHospitalName');
        $kota = $request->input('inputHospitalCity');
        $alamat = $request->input('inputHospitalAddress');
        $notelp = $request->input('inputHospitalNumber');
        $foto = $request->input('inputHospitalImage');
        $hospitals = new Hospital();
        // $hospitals -> id = $id;
        $hospitals -> namarumahsakit = $namarumahsakit;
        $hospitals -> kota = $kota;
        $hospitals -> alamat = $alamat;
        $hospitals -> notelp = $notelp;
        $hospitals -> foto = $foto;
        $hospitals -> save();

        return redirect()->route('hospitaladmin');
    }

    public function edit_hospital_process(Request $request, $id){
        Hospital::getHospitalDetail($id)->where('id', $request->id)
        -> update(
        ['namarumahsakit' => $request->input('inputHospitalName'),
        'kota' => $request->input('inputHospitalCity'),
        'alamat' => $request->input('inputHospitalAddress'),
        'notelp' => $request->input('inputHospitalNumber'),
        'foto' => $request->input('inputHospitalImage')]);

        return redirect()->route('hospitaladmin');
    }

    public function hospitalInfo($id){
        $hospitals = Hospital::getHospitalDetail($id);

        return view ('Admin.edithospital', ['hospitals' => $hospitals]);
    }

    public function delete_hospital($id){
        $hospitals = Hospital::getHospitalDetail($id);
        $hospitals -> delete();
        return redirect('/hospitaladmin');
    }

    public function manage_reservation(){
        $reservations = Reservation::getAllReservation();
        $reservationdone = ReservationDone::getAllReservationDone();
        return view ('Admin.manageReservation', ['reservations' => $reservations, 'reservationdone'=>$reservationdone]);
    }

    public function add_reservation_done($id){
        $reservation = Reservation::getReservationDetail($id);
        $namalengkap = $reservation['namalengkap'];
        $namarumahsakit = $reservation['namarumahsakit'];
        $alamat = $reservation['alamat'];
        $notelp = $reservation['notelp'];
        $created = $reservation['created_at'];
        $reservationdone = new ReservationDone();
        $reservationdone -> namalengkap = $namalengkap;
        $reservationdone -> namarumahsakit = $namarumahsakit;
        $reservationdone -> alamat = $alamat;
        $reservationdone -> notelp = $notelp;
        $reservationdone -> created_at = $created;
        $reservationdone -> save();
        $reservation -> delete();

        return redirect()->route('Admin.manageReservation')->with(['reservationdone'=>$reservationdone]);
    }

    public function manage_help(){
        $helps = Help::getAllHelp();
        $helpdone = HelpDone::getAllHelpDone();
        return view ('Admin.manageHelp', ['helps' => $helps, 'helpdone'=>$helpdone]);
    }

    public function add_help_done($id){
        $help = Help::getHelpDetail($id);
        $namalengkap = $help['user_id'];
        $email = $help['email'];
        $notelp = $help['notelp'];
        $messages = $help['pesan'];
        $created = $help['created_at'];
        $helpdone = new HelpDone();
        $helpdone -> user_id = $namalengkap;
        $helpdone -> email = $email;
        $helpdone -> notelp = $notelp;
        $helpdone -> pesan = $messages;
        $helpdone -> created_at = $created;
        $helpdone -> save();
        $help -> delete();

        return redirect()->route('Admin.manageHelp')->with(['helpdone'=>$helpdone]);
    }
}
