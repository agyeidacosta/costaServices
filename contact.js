 
 
 function sendSubmission(e){  
e.preventDefault();
const personalName=document.getElementById("Name").value.trim();
const personalContact=document.getElementById("Fcontact").value.trim();
const personalMail=document.getElementById("Mail").value ;
const personalRegion=document.getElementById("Region").value;
const alertMessage=document.getElementById("handlesubmissionMessage");

    fetch('backend_files/contactform_insertion.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            name:personalName,
            fcontact:personalContact,
            mail:personalMail,
            region:personalRegion,
        }),
    })  .then((res) => res.json())
        .then((dataj) => {
            if (dataj.message) {
                alertMessage.textContent = dataj.success|| 'Form submission made successfully';
        
                myFormsubmission.reset();
            } 
            else {
               alertMessage.textContent = dataj.error || 'Form not sent';
            }

        })
        .catch(() => {
            alertMessage.textContent = '';
        });

        setTimeout(()=>{
            alertMessage.textContent="";
            },3000);
        }

const myFormsubmission=document.getElementById("handlesubmission");
myFormsubmission.addEventListener("submit", sendSubmission);
