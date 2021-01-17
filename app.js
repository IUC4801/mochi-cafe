const card = document.querySelectorAll('.card__inner');


card.forEach((card) => {
     card.addEventListener("click", () => {
          card.classList.toggle("is-flipped");
     });
});


function validation(){

var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

     if(!emailReg.test($("#mail").val())){
     alert("Enter valid email id");
     return false;
     }
     else if ($("#user").val()==null || $("#user").val()=="")
     {
         alert("Name can't be null");
         return false;
     }
     else{
          alert("Your message has been successfully sent.")
     }
}
