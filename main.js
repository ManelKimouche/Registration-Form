const myForm = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const msg = document.querySelector('.msg');
const msg_name = document.querySelector('.msg_name');
const msg_email = document.querySelector('.msg_email');
const display_msg = document.querySelector('.msg_disp');

// Listen for form submit
myForm.addEventListener('submit', onSubmit);




function onSubmit(e) {
  e.preventDefault();
  if(nameInput.value === '' || emailInput.value === ''){
    msg.classList.add('error');
    msg.innerHTML = 'Please enter all fields';
    setTimeout(() => msg.remove(), 3000);
    msg_email.classList.add('error');
    msg_email.innerHTML = 'Please enter a valid email';
    setTimeout(() => msg_email.remove(), 3000);
  } 
  if(nameInput.value.length<3){
    msg_name.classList.add('error');
    msg_name.innerHTML = 'name must be 3 caracters at least!';
    setTimeout(() => msg_name.remove(), 3000);
  }  else {
    display_msg.classList.add('display_r');
    display_msg.innerHTML = 'Your registration information :' +"<br>" + `${nameInput.value}: ${emailInput.value}`;
    nameInput.value = '';
    emailInput.value = '';
  }
}

