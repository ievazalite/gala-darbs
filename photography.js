//get data, parse json, do the promise
fetch('images.json')
    .then(function (response){
        return response.json();
    })
    .then(function (data){
        appendData(data);
    })

    //catching an error
    .catch(function (err){
        console.log(err);
    }
);

//this is where i'll put json data in
let eventContainer = document.getElementById('events');

//loop thru each picture, create an element where to put it
function appendData(data){
    for(let i = 0; i < data.length; i++){
        let img = document.createElement('img');
        img.innerHTML = `<img src='${data.events}'/>`;
        eventContainer.appendChild(img);
    }
}
