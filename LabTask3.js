function CheckFormValidation()
{
let firstname=document.getElementById("firstname").value;
if(firstname=="")
{
    alert("Please fill up the name field");
    return false
}

}


// let CheckFormValidation=()=>{
//     

//     if (firstname=="" || lastname=="" || company=="" || address1=="" || address2=="" || city=="" || state=="" || zip=="")
//     {
//         alert("Please fill up all the fields");
//         errorMessage.innerHTML= 'Please fill up all the fields'
//         errorMessage.state.color='red';
//         return false;
//     }
//     else{
//         if(zip=="1206"){
//             alert('Form successfully submited');
//             return true;    
//         }
//         else{
//             errorMessage.innerHTML='Zip code does not mathced'
//             errorMessage.style.color='red';
//             return false;
//         }
//     }

// } 
