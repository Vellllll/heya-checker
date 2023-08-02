function search_hospital_name() {
    let hospital = document.getElementById('hospitalSearchName').value;
    hospital = hospital.toLowerCase();
    let x = document.getElementsByClassName('hospital-card');

    for (i = 0; i < x.length; i++) {
        if (!x[i].getElementsByClassName('hospital-name')[0].innerHTML.toLowerCase().includes(hospital)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";
        }
    }
}
function search_hospital_city() {
    let hospital = document.getElementById('hospitalSearchCity').value;
    hospital = hospital.toLowerCase();
    let x = document.getElementsByClassName('hospital-card');

    for (i = 0; i < x.length; i++) {
        if (!x[i].getElementsByClassName('hospital-city')[0].innerHTML.toLowerCase().includes(hospital)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";
        }
    }
}
function search_hospital_address() {
    let hospital = document.getElementById('hospitalSearchAddress').value;
    hospital = hospital.toLowerCase();
    let x = document.getElementsByClassName('hospital-card');

    for (i = 0; i < x.length; i++) {
        if (!x[i].getElementsByClassName('hospital-address')[0].innerHTML.toLowerCase().includes(hospital)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";
        }
    }
}
