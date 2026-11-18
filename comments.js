function feedbackS(e){
    e.preventDefault();

const feeds=document.getElementById("feedMe").value ;
const message=document.getElementById("submissionAlert");



fetch('backend_files/coments_insertion.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            feedback:feeds,
            
        }),
    }) 
    
    .then((res) => res.json())
        .then((facts) => {
            if (facts.message) {
              message.textContent = facts.success|| 'Message sent successfully';
        
              feedbackSubmission.reset();
            } 
            else {
             message.textContent = facts.error || 'Message not sent';
            }

        })
        .catch(() => {
            message.textContent = '';
        });

        setTimeout(()=>{
           message.textContent="";
            },3000);

        
}

const livefeed=document.getElementById("feedbackSubmission");
livefeed.addEventListener("submit", feedbackS);
