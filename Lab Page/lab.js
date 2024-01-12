const email= document.getElementById('name')
const appointmentNo= document.getElementById('name')
const password= document.getElementById('name')
const form= document.getElementById('form')
const errorElement = document.getElementById ('error')
form.addEventListener('register', () => {
    let messages= []
    if (email.value === '' || email.value == null) {
        messages.push ('required')
    }

     if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(',')
  
     }
     if (password.value === '' ||password.value == null) {
        messages.push ('required')
    }    
     if (password.length !== 8 ) {
        messages.push ('Password must have 8 characters')
     }

     if (appointmentNo.value === '' ||appointmentNo.value == null) {
        messages.push ('required')
    }    

     }
     

)
let my_url = "file:///C:/Users/hp/Desktop/lab%20page/newpage.html";
document.getElementById("register").onclick =
function(){
    window.location.replace(my_url);
}
