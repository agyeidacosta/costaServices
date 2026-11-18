 
 
 function updatedC(e, id){  
e.preventDefault();
const personal_Name=document.getElementById("name").value.trim();
const personal_Contact=document.getElementById("fcontact").value.trim();
const personal_Mail=document.getElementById("mail").value ;
const personal_Region=document.getElementById("region").value;
const alert_Message=document.getElementById("myMessage");

    fetch('backend_files/update.php?id=${id}', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            name:personal_Name,
            fcontact:personal_Contact,
            mail:personal_Mail,
            region:personal_Region,
        }),
    })  .then((res) => res.json())
        .then((dataj) => {
            if (dataj.message) {
                alertMessage.textContent = dataj.success|| 'Contact details updated successfully';
        
                updateP.reset();
            } 
            else {
               alert_Message.textContent = dataj.error || 'Update fail';
            }

        })
        .catch(() => {
            alert_Message.textContent = '';
        });

        setTimeout(()=>{
            alert_Message.textContent="";
            },3000);
        }

const myUpdate=document.getElementById("updateP");
myUpdate.addEventListener("submit", updatedC);



