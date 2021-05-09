// where data will be inserted
const eventContainer = document.getElementById("events");
const portraitsContainer = document.getElementById("portraits");
const familyContainer = document.getElementById("family");

//define function first (only then actions aka fetch), loop thru data, place it in html
const appendData = (data) => {
  let template1 = "";
  let template2 = "";
  let template3 = "";
  for (let i = 0; i < data.events.length; i++) {
    template1 += `<img src='./img/events/${data.events[i]}' />`;
  }
  for (let i = 0; i < data.portraits.length; i++) {
    template2 += `<img src='./img/portraits/${data.portraits[i]}' />`;
  }
  for (let i = 0; i < data.family.length; i++) {
    template3 += `<img src='./img/family/${data.family[i]}'  />`;
  }
  eventContainer.innerHTML = template1;
  portraitsContainer.innerHTML = template2;
  familyContainer.innerHTML = template3;
};

//get data, json parse, promise, catch any errors
fetch("./images.json")
  .then((res) => res.json())
  .then((data) => appendData(data))
  .catch((err) => console.error(`JINKIES: ${err.message}`));