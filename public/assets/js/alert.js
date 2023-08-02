const button = document.querySelector("button"),
      alert_box = document.querySelector(".alert-box")
      closeIcon = document.querySelector(".close"),
      progress = document.querySelector(".progress");
      
      button.addEventListener("click", () => {
        alert_box.classList.add("active");
        progress.classList.add("active");

        setTimeout(() => {
          alert_box.classList.remove("active");
        }, 5000);

        setTimeout(() =>{
          progress.classList.remove("active");
        }, 5300);
      });

      
      
      closeIcon.addEventListener("click", () => {
        alert_box.classList.remove("active");

        setTimeout(() =>{
          progress.classList.remove("active");
        }, 300)
      });

function add_reservation(){
  alert('Your reservation has been recorded!');
}




