
const btn=document.getElementById("fetchbtn");
const res=document.getElementById("result");

btn.addEventListener("click",fetchdata);

function fetchdata(){

    fetch("practical11.php")
    .then(response=>response.json())
    .then(data => {

        res.innerHTML=`  
        
            <p>name : ${data.name}</p>
            <p>class : ${data.class}</p>
            <p>time : ${data.time}</p>
           
            `;
    })
     .catch(error => {
                result.innerHTML = `<p style="color:red;">Error: ${error}</p>`;
            });

}