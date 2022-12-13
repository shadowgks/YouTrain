let form1             = document.getElementById("signin");
let form2             = document.getElementById("signup");
let btnsignup         = document.getElementById("btnup") ;
let btnsignin         = document.getElementById("btnin");
let addMobile = document.getElementById("addMobile");
let addMenu = document.querySelector('.add-functions');
let tripBtn = document.querySelector('.trip');
let trainBtn = document.querySelector('.train');
let stationBtn = document.querySelector('.station');
let ticketBtn = document.querySelector('.ticketBtn');
let nameInput = document.getElementById('nameInput');
let numInput = document.querySelector('#numInput');
let capacityInput = document.getElementById('capacityInput');
let checkInput = document.getElementById('checkInput');
let modalTitle = document.querySelector('.pop-title');
let depDateInput = document.querySelector('.d-input');
let arrDateInput = document.querySelector('.a-input');
let priceInput = document.querySelector('.price-input');
let depSelectBox = document.querySelector('.dstation-select');
let arrSelectBox = document.querySelector('.aStation-select');
let usersList = document.querySelector('.users-select');
let tripsList = document.querySelector('.trip-select');
console.log(ticketBtn);


//function show sign_up

function show_Sign_up(e){
    e.preventDefault();
    form2.style.display       ="block";  
    form1.style.display       ="none";  
    btnsignin.style.display   ="block";
    btnsignup.style.display  ="none";
}
            
//function show sign_in
            
function show_Sign_in(e){
    e.preventDefault();
    form2.style.display       ="none";  
    form1.style.display       ="block";  
    btnsignin.style.display   ="none";
    btnsignup.style.display  ="block";
}


function showTripModal(){
    capacityInput.style.display = 'none';
    numInput.style.display = 'none';
    nameInput.style.display = 'none';
    checkInput.style.display = 'none';
    usersList.style.display = 'none';
    tripsList.style.display = 'none';
    modalTitle.innerText = "Add Trip";
}

function showTrainModal(){
    capacityInput.style.display = 'block';
    numInput.style.display = 'block';
    nameInput.style.display = 'block';
    checkInput.style.display = 'block';
    depDateInput.style.display = 'none';
    arrDateInput.style.display = 'none';
    priceInput.style.display = 'none';
    depSelectBox.style.display = 'none';
    arrSelectBox.style.display = 'none';
    usersList.style.display = 'none';
    tripsList.style.display = 'none';
    
    modalTitle.innerText = "Add Train";
    
}

function showStationModal(){
    capacityInput.style.display = 'none';
    numInput.style.display = 'none';
    checkInput.style.display = 'none';
    depDateInput.style.display = 'none';
    arrDateInput.style.display = 'none';
    priceInput.style.display = 'none';
    depSelectBox.style.display = 'none';
    arrSelectBox.style.display = 'none';
    usersList.style.display = 'none';
    tripsList.style.display = 'none';
    nameInput.style.display = 'block';

    modalTitle.innerText = "Add Station";
}

function showTicketModal(){
    console.log('FRRRRRRRRRRRR');
    usersList.style.display = 'block';
    tripsList.style.display = 'block';
    capacityInput.style.display = 'none';
    nameInput.style.display = 'none';
    numInput.style.display = 'none';
    checkInput.style.display = 'none';
    depDateInput.style.display = 'none';
    arrDateInput.style.display = 'none';
    priceInput.style.display = 'none';
    depSelectBox.style.display = 'none';
    arrSelectBox.style.display = 'none';
}

addMobile.addEventListener('click', function () {
addMobile.classList.toggle('expand');
if(addMobile.classList.contains("expand")){
    addMenu.style.maxHeight = 200 + "px";
}else{
    addMenu.style.maxHeight = 0 + "px";
}
})

tripBtn.addEventListener('click', showTripModal);
trainBtn.addEventListener('click', showTrainModal);
stationBtn.addEventListener('click', showStationModal);
ticketBtn.addEventListener('click',showTicketModal)