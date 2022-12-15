let form1             = document.getElementById("signin");
let form2             = document.getElementById("signup");
let btnsignup         = document.getElementById("btnup") ;
let btnsignin         = document.getElementById("btnin");
let addMobile = document.getElementById("addMobile");
let addMenu = document.querySelector('.add-functions');
let tripBtn = document.querySelectorAll('.trip');
let trainBtn = document.querySelectorAll('.train');
let stationBtn = document.querySelectorAll('.station');
let ticketBtn = document.querySelectorAll('.ticketBtn');
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
let updateTravels = document.querySelectorAll('.updateTravels');
let departureInput = document.querySelector('#departureInput')
console.log(updateTravels);
let idInput = document.querySelector('#idInput');
let arrivalDateInput = document.querySelector('#arrivalInput');
console.log(idInput)


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
    depDateInput.style.display = 'block'
    arrDateInput.style.display = 'block';
    priceInput.style.display = 'block';
    depSelectBox.style.display = 'block';
    arrSelectBox.style.display = 'block';
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
    modalTitle.innerText = "Add Ticket";
}

addMobile.addEventListener('click', function () {
addMobile.classList.toggle('expand');
if(addMobile.classList.contains("expand")){
    addMenu.style.maxHeight = 225 + "px";
}else{
    addMenu.style.maxHeight = 0 + "px";
}
})

function updateTrip(id){
    const tripId = document.getElementById(`trip-${id}`);
    const tripNum = tripId.querySelector('.tripId').getAttribute('data-tripId');
    const tripDepDate = tripId.querySelector('.tripDepDate').getAttribute('data-tripDepDate');
    const tripArrDate = tripId.querySelector('.tripArrDate').getAttribute('data-tripArrDate');
    const tripDepStation = tripId.querySelector('.tripDepStation').getAttribute('data-tripDepStation');
    const tripArrStation = tripId.querySelector('.tripArrStation').getAttribute('data-tripArrStation');
    const tripPrice = tripId.querySelector('.tripPrice').getAttribute('data-tripPrice');
    showTripModal();
    idInput.value=tripNum;
    departureInput.value = tripDepDate;
    arrivalDateInput.value = tripArrDate;
    console.log(depDateInput);
    console.log(tripNum)
    console.log(tripDepDate)
    console.log(tripArrDate)
    console.log(tripDepStation)
    console.log(tripArrStation)
    console.log(tripPrice)
}
// function showUpdateTripModal() {
//     // showUpdateTripModal();
//     // showTripModal();
//     console.log(depDateInput.value);

// }

// tripBtn.addEventListener('click', showTripModal);
for(i=0;i<tripBtn.length;i++){
    tripBtn[i].addEventListener('click', showTripModal)
}
for(i=0;i<ticketBtn.length;i++){
    ticketBtn[i].addEventListener('click', showTicketModal)
}
for(i=0;i<stationBtn.length;i++){
    stationBtn[i].addEventListener('click', showStationModal)
}

for(i=0;i<trainBtn.length;i++){
    trainBtn[i].addEventListener('click', showTrainModal)
}

// for(i=0;i<updateTravels.length;i++){
//     updateTravels[i].addEventListener('click', showUpdateTripModal)
// }

// trainBtn.addEventListener('click', showTrainModal);
// stationBtn.addEventListener('click', showStationModal);
// ticketBtn.addEventListener('click',showTicketModal);