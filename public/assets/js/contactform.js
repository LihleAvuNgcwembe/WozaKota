//pulling information from form

const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=>{
    e.preventDefault();//delaying the submission
    statusTxt.style.color = "#7CB9E8";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); // making new xml object
    xhr.open("POST", "contactconfirm.php", true);
    xhr.onload = ()=>{ //as soon as the ajax is loaded
        if(xhr.readyState == 4 && xhr.status == 200){ // if the response staus is 200 and the ready status is 4 = no errors 
            let response = xhr.response; //putting the ajax response in a variable
            if(response.indexOf("Email and password field is required")!= -1 || response.indexOf("Message unsuccessfully sent")){
                //if there's an error, the system will show a red message
                statusTxt.style.color = "red";
            }else{
                form.reset();
                setTimeout(() =>{
                    statusTxt.style.display = "none";
                }, 3000); 
            }
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData(form); //object used to send form data
    xhr.send(formData);
}
