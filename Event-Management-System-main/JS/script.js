function registervalidate(){
    var city=document.getElementById("city").value;
    var eventname=document.getElementById("eventname").value;
    var eventdate=document.getElementById("eventdate").value;   
    var eventtime=document.getElementById("eventtime").value;
    var totalseats=document.getElementById("totalseats").value;
    var availableseats=document.getElementById("availableseats").value;
    var price=document.getElementById("price").value;
    
    if(city==""){
        alert("Please select city");
        return false;
    }
    if(eventname==""){
        alert("Please enter event name");
        return false;
    }
    if(eventdate==""){
        alert("Please enter event date");
        return false;
    }
    if(eventtime==""){
        alert("Please enter event time");
        return false;
    }
    if(totalseats==""){
        alert("Please enter total seats");
        return false;
    }
    if(availableseats==""){
        alert("Please enter available seats");
        return false;
    }
    if(price==""){
        alert("Please enter price");
        return false;
    }
    
    const city_regex=/^[a-z A-Z]+$/;
    if(!city_regex.test(city)){
        alert("Please enter valid city");
        return false;
    }

    const eventname_regex=/^[a-z A-Z]+$/;
    if(!eventname_regex.test(eventname)){
        alert("Please enter valid event name");
        return false;
    }

    const eventdate_regex=/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/;
    if(!eventdate_regex.test(eventdate)){
        alert("Please enter valid event date");
        return false;
    }

    const eventtime_regex=/^[0-9]{2}:[0-9]{2}$/;
    if(!eventtime_regex.test(eventtime)){
        alert("Please enter valid event time");
        return false;
    }

    const totalseats_regex=/^[0-9]+$/;
    if(!totalseats_regex.test(totalseats)){
        alert("Please enter valid total seats");
        return false;
    }

    const availableseats_regex=/^[0-9]+$/;
    if(!availableseats_regex.test(availableseats)){
        alert("Please enter valid available seats");
        return false;
    }

    // if(availableseats>totalseats){
    //     alert("Available seats should be less than total seats");
    //     return false;
    // }

    const price_regex=/^[0-9]+$/;
    if(!price_regex.test(price)){
        alert("Please enter valid price");
        return false;
    }
    
    return true;
}

function loginvalidate(){

    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    var usertype=document.querySelector('input[name="loginas"]:checked').value;
    
    if(username==""){
        alert("Please enter username");
        return false;
    }
    if(password==""){
        alert("Please enter password");
        return false;
    }
    
    const username_regex=/^[a-zA-Z0-9]+$/;
    if(!username_regex.test(username)){
        alert("Please enter valid username");
        return false;
    }
    
    var user_split_first_three=username.substring(0,3);
    if(user_split_first_three!="usr" && usertype==0){
        alert("Username should start with usr");
        return false;
    }
    
    var user_split_first_three=username.substring(0,3);
    if(user_split_first_three!="adm" && usertype==1){
        alert("Username should start with adm");
        return false;
    }

    return true;
}
