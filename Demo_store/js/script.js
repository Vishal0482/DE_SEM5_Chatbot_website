var myArray = [];

document.addEventListener("DOMContentLoaded", function () {
  fetch('./js/data.json')
    .then(res => res.json())
    .then(data => {
      console.log(`data :- ${data.data}`);
      myArray = data.data;
      console.log(`"My Array :- ${myArray}`);
      buildTable(myArray);
    })
    .catch(error => {
      console.error("Error :- " + error);
    });
})

// search using button
function search() {
  value = document.getElementById("search-input").value;
  console.log('Value:', value);
  var data = searchTable(value, myArray);
  buildTable(data);
}



function searchTable(value, data) {
  var filterData = []
  for (let i = 0; i < data.length; i++) {
    value = value.toLowerCase()
    var name = data[i].heading.toLowerCase();
    if (name.includes(value)) {
      filterData.push(data[i]);
    }
  }
  return filterData
}

function buildTable(data) {
  var table = document.getElementById("product-list");
  table.innerHTML = ``

  for (var i = 0; i < data.length; i++) {
    var row = `
        <div class="row py-4 my-5 row-cols-1 row-cols-lg-3 bg-light rounded">
        <div class="feature col">
          <div class="col-4 m-auto">
            <img alt="${data[i].heading}"
              src="${data[i].image}">
          </div>
        </div>
        <div class="feature col">
          <div class="mt-4 text-center">
            <h5>${data[i].heading}</h5>
          </div>
          <ul class="pt-4">
            <li>${data[i].storage}</li>
            <li>${data[i].display}</li>
            <li>${data[i].camera}</li>
            <li>${data[i].battery}</li>
            <li>${data[i].processor}</li>
            <li>${data[i].display2}</li>
            <li>${data[i].warranty}
            </li>
          </ul>
        </div>
        <div class="feature col">
          <div class="text-center">
            <h4>${data[i].price}</h4>
          </div>
          <div class="d-flex flex-column my-3 px-5">
            <a class="btn btn-primary my-4" href="checkout.html" role="button">Buy Now</a>
            <button type="button" class="btn btn-danger">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
        `

    table.innerHTML += row;
    let result = data.length;
    document.getElementById("result").innerHTML = result;
  }
}


// chatbox visible/hidden

document.getElementById("chat-box").style.visibility = "hidden";
function chatBox() {
  document.getElementById("chat-icon").style.visibility = "hidden";
  document.getElementById("chat-box").style.visibility = "visible";
}

function chatIcon() {
  document.getElementById("chat-icon").style.visibility = "visible";
  document.getElementById("chat-box").style.visibility = "hidden";
}
