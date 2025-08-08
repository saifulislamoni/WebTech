

function CheckFormValidation()
{
    var firstname=document.getElementById("firstname").value;
    var lastname= document.getElementById("lastname").value;
    let company= document.getElementById("company").value;
    let addres1= document.getElementById("Add1").value;
    let addres2= document.getElementById("Add2").value;
    let city=document.getElementById("city").value;
    let phone= document.getElementById("phone").value;
    let zip=document.getElementById("zip").value;
    let fax=document.getElementById("fax").value;
    let email=document.getElementById("email").value;
    let name=document.getElementById("name").value;
    let ack=document.getElementById("ack").value;
    let adresbottom=document.getElementById("adress").value;
    let city2=document.getElementById("city2").value;
    let zip2=document.getElementById("zip2").value;
    let name2=document.getElementById("name2").value;


    const donationRadios = document.getElementsByName("donation_ammount");
    let isChecked_donationRadios = false;
 
    for (let i = 0; i < donationRadios.length; i++) {
        if (donationRadios[i].checked) {
            isChecked_donationRadios = true;
            break;
        }
    }
    if (!isChecked_donationRadios) {
        alert("Please select a Donation Amount.");
        return false;
    }
    



    if(firstname==="")
    {
        alert("Please fill up the firstname field");
        return false
    }
    
    else if(lastname==="")
    {
        alert("Please fill up the lastname field");
        return false
    }
    else if(firstname.match(/[A-Z][a-z]*\s{1}[A-Z][a-z]*&/))
    {
        alert("Please enter a valid Name in the firstname field");
        return false
    }
    else if(company==="")
    {
        alert("Please fill up the company field");
        return false
    }
    else if(addres1==="")
    {
        alert("Please fill up the address    field");
        return false
    }
    else if(city==="")
    {
        alert("Please fill up the city field");
        return false
    }    
    else if(phone==="")
    {
        alert("Please fill up the phone field");
        return false
    }
    else if(!phone.match(/^[0][1][3456789][0-9]{8}/))
    {
        alert("Please provide a valid phone number");
        return false
    }
    else if(zip==="")
    {
        alert("Please fill up the zip field for Honorarium amd Memorial Donation Information");
        return false
    }
    else if(fax==="")
    {
        alert("Please fill up the fax field");
        return false
    }
    else if (email==="")
    {
        alert("Please fill up the email field");
        return false
    }
    else if(!email.match(/\w*[@][A-Za-z]*[\.][a-z]{3}$/))
    {
        alert("Please fill up a valid email address");
        return false
    }



    

    
    
    

}
