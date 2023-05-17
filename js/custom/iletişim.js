var nameError=document.getElementById('name-error');
var phoneError=document.getElementById('phone-error');
var emailError=document.getElementById('email-error');
var messageError=document.getElementById('message-error');
var submitError=document.getElementById('submit-error');

function validateName(){
    var name = document.getElementById('contact-name').value;

    if(name.length==0){
        nameError.innerHTML = 'İsim bos bırakılamaz';
        return false;
    }

    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError.innerHTML = 'İsminizi doğru giriniz';
        return false;
    }

    nameError.innerHTML= '<i class="fa fa-check" aria-hidden="true"></i>';
    return true ;
}

function validatePhone(){ 
    var phone = document.getElementById('contact-phone').value;
    
    if(phone.length == 0){
        phoneError.innerHTML='Telefon no giriniz';
        return false;
    }

    if(phone.length !== 10){
        phoneError.innerHTML='Telefon no 10 rakam icermeli';
        return false;
    }
    
    if( !phone.match(/^[0-9]{10}$/) )
    {
        phoneError.innerHTML='Sadece rakam olmalı'
        return false;
    }

    phoneError.innerHTML = '<i class="fa fa-check" aria-hidden="true"></i>';
    return true;

}

function validateEmail(){
    var email = document.getElementById('contact-email').value;

    if(email.length==0)
    {
        emailError.innerHTML = 'E-mail yazınız';
        return false;
    }
    
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/))
    {
        emailError.innerHTML='Gecersiz email';
        return false;
    }

    emailError.innerHTML= '<i class="fa fa-check" aria-hidden="true"></i>';
    return true;
}

function validateForm(){

    if( !validateName() || !validatePhone() || !validateEmail())
    {
        submitError.style.display = 'block';
        submitError.innerHTML = 'Lütfen gerekli yerleri doldurunuz.';
        setTimeout(function(){submitError.style.display = 'none';},3000);
        return false;
    }



}