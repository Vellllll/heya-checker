function username_search() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("usernameSearch");
    filter = input.value.toUpperCase();
    table = document.getElementById("help-table");
    tr = table.getElementsByTagName("tr");
  
    
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function hospital_search() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("hospitalNameSearch");
    filter = input.value.toUpperCase();
    table = document.getElementById("help-table");
    tr = table.getElementsByTagName("tr");
  
    
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function date_search() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("dateSearch");
    filter = input.value.toUpperCase();
    table = document.getElementById("help-table");
    tr = table.getElementsByTagName("tr");
  
    
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[5];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}