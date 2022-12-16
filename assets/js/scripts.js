let form1 = document.getElementById("signin");
let form2 = document.getElementById("signup");
let btnsignup = document.getElementById("btnup") ;
let btnsignin = document.getElementById("btnin");
let addMobile = document.getElementById("addMobile");
let addMenu = document.querySelector('.add-functions');
let tripBtn = document.querySelectorAll('.trip');
let trainBtn = document.querySelectorAll('.train');
let stationBtn = document.querySelectorAll('.station');
let ticketBtn = document.querySelectorAll('.ticketBtn');
let nameInput = document.getElementById('nameInput');
let numInput = document.querySelector('#numInput');
let capacityInput = document.getElementById('capacityInput');
let citiesBox = document.querySelector('.cities');
let modalTitle = document.querySelector('.pop-title');
let depDateInput = document.querySelector('.d-input');
let arrDateInput = document.querySelector('.a-input');
let priceInput = document.querySelector('.price-input');
let depSelectBox = document.querySelector('.dstation-select');
let arrSelectBox = document.querySelector('.aStation-select');
let usersList = document.querySelector('.users-select');
let tripsList = document.querySelector('.trip-select');
let trainList = document.querySelector('.train-list');
let updateTravels = document.querySelectorAll('.updateTravels');
let departureInput = document.querySelector('#departureInput');
let idInput = document.querySelector('#idInput');
let inputName = document.querySelector('#namesInput');
let trainNumInput = document.querySelector('#trainNumberInput');
let arrivalDateInput = document.querySelector('#arrivalInput');
let departureStation = document.querySelector('#depStation');
let arrivalStation = document.querySelector('#arrStation');
let trippriceInput = document.querySelector('#priceInput');
let inputCapacity = document.querySelector('#capacity');
let selectCity = document.querySelector('#citiesBox')
let saveBtn = document.querySelector('#saveBtn');
let upBtn = document.querySelector('#updateBtn');
let deleteBtn = document.querySelector('#deleteBtn');
let crudform = document.querySelector('#exampleModal');
let funcInput = document.querySelector("#funcId");
console.log(funcInput)


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
    usersList.style.display = 'none';
    tripsList.style.display = 'none';
    citiesBox.style.display = 'none';
    trainList.style.display = 'block';
    modalTitle.innerText = "Add Trip";
    saveBtn.style.display = 'block';
    deleteBtn.style.display = 'none';
    updateBtn.style.display = 'none';
    funcInput.value = 'trip';
}

function showTrainModal(){
    capacityInput.style.display = 'block';
    numInput.style.display = 'block';
    nameInput.style.display = 'block';
    depDateInput.style.display = 'none';
    arrDateInput.style.display = 'none';
    priceInput.style.display = 'none';
    depSelectBox.style.display = 'none';
    arrSelectBox.style.display = 'none';
    usersList.style.display = 'none';
    tripsList.style.display = 'none';
    citiesBox.style.display = 'none'
    modalTitle.innerText = "Add Train";
    deleteBtn.style.display = 'none';
    updateBtn.style.display = 'none';
    saveBtn.style.display = 'block';
    trainList.style.display = 'none';
    funcInput.value = 'train';
}

function showStationModal(){
    capacityInput.style.display = 'none';
    numInput.style.display = 'none';
    depDateInput.style.display = 'none';
    arrDateInput.style.display = 'none';
    priceInput.style.display = 'none';
    depSelectBox.style.display = 'none';
    arrSelectBox.style.display = 'none';
    usersList.style.display = 'none';
    tripsList.style.display = 'none';
    nameInput.style.display = 'block';
    citiesBox.style.display = 'block'
    trainList.style.display = 'none';
    modalTitle.innerText = "Add Station";
    deleteBtn.style.display = 'none';
    updateBtn.style.display = 'none';
    saveBtn.style.display = 'block';
    funcInput.value = 'station'
}

function showTicketModal(){
    usersList.style.display = 'block';
    tripsList.style.display = 'block';
    capacityInput.style.display = 'none';
    nameInput.style.display = 'none';
    numInput.style.display = 'none';
    depDateInput.style.display = 'none';
    arrDateInput.style.display = 'none';
    priceInput.style.display = 'none';
    depSelectBox.style.display = 'none';
    arrSelectBox.style.display = 'none';
    citiesBox.style.display = 'none'
    trainList.style.display = 'none';
    modalTitle.innerText = "Add Ticket";
    deleteBtn.style.display = 'none';
    updateBtn.style.display = 'none';
    saveBtn.style.display = 'block';
    funcInput.value = 'ticket'
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
    departureStation.value = tripDepStation;
    arrivalStation.value = tripArrStation;
    trippriceInput.value = tripPrice;
    saveBtn.style.display = 'none';
    deleteBtn.style.display = 'block';
    updateBtn.style.display = 'block';
}

function updateTrain(id){
    const trainId = document.querySelector(`#train-${id}`);
    const idTrain = trainId.querySelector('#trainId').getAttribute('data-gareId');
    const trainNum = trainId.querySelector('#trainId').getAttribute('data-gareNum');
    const trainName = trainId.querySelector('#trainName').getAttribute('data-gareNom');
    const trainCapacity = trainId.querySelector('#trainCapacity').getAttribute('data-gareCapacite');
    showTrainModal();
    inputCapacity.value = trainCapacity;
    inputName.value = trainName;
    trainNumInput.value = trainNum;
    idInput.value = idTrain;
    saveBtn.style.display = 'none';
    deleteBtn.style.display = 'block';
    updateBtn.style.display = 'block';
}

function updateStations(id){
    const stationId = document.querySelector(`#station-${id}`);
    const stationName = stationId.querySelector('#stationName').getAttribute('data-stationName');
    const stationCityId = stationId.querySelector('#cityName').getAttribute('data-stationCityId');
    inputName.value = stationName;
    selectCity.value = stationCityId;
    idInput.value = id;
    showStationModal();
    saveBtn.style.display = 'none';
    deleteBtn.style.display = 'block';
    updateBtn.style.display = 'block';
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

// deleteBtn.addEventListener('click', ()=>{
//     crudform.reset();
// })
// updateBtn.addEventListener('click', ()=>{
//     crudform.reset();
// })
// // for(i=0;i<updateTravels.length;i++){
//     updateTravels[i].addEventListener('click', showUpdateTripModal)
// }

// trainBtn.addEventListener('click', showTrainModal);
// stationBtn.addEventListener('click', showStationModal);
// ticketBtn.addEventListener('click',showTicketModal);