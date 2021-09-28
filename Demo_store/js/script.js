var myArray = [
  {
    'image': 'https://rukminim1.flixcart.com/image/312/312/kmmcrrk0/mobile/4/g/a/8-rmx3085-realme-original-imagfgpfdkyc29zc.jpeg?q=70',
    'heading': 'realme 8 (Cyber Black, 128 GB)',
    'storage': '4 GB RAM | 128 GB ROM | Expandable Upto 256 GB',
    'display': '16.26 cm (6.4 inch) Full HD+ Display',
    'camera': '4MP + 8MP + 2MP + 2MP | 16MP Front Camera',
    'battery': '5000 mAh Battery',
    'processor': 'MediaTek Helio G95 Processor',
    'display2': 'Super AMOLED Display',
    'warranty': '1 Year Warranty for Mobile and 6 Months for Accessories',
    'price': '₹15,999',
  },

  {
    'image': 'https://rukminim1.flixcart.com/image/312/312/kkh6zrk0/mobile/8/x/l/x7-rmx3092-realme-original-imafztjzgzphyp6q.jpeg?q=70',
    'heading': 'realme X7 5G (Space Silver, 128 GB)',
    'storage': '8 GB RAM | 128 GB ROM',
    'display': '16.33 cm (6.43 inch) Full HD+ Display',
    'camera': '64MP + 8MP + 2MP | 16MP Front Camera',
    'battery': '4310 mAh Battery',
    'processor': 'MediaTek Dimensity 800U Processor',
    'display2': 'Super AMOLED Display',
    'charger': '50W Fast Charging | Lightweight (176 g) and Slim',
    'warranty': 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories',
    'price': '₹19,999',
  },

  {
    'image': 'https://rukminim1.flixcart.com/image/312/312/kkh6zrk0/mobile/s/n/p/x7-rmx3092-realme-original-imafztjzggzsnks2.jpeg?q=70',
    'heading': 'realme X7 5G (Nebula, 128 GB)',
    'storage': '8 GB RAM | 128 GB ROM',
    'display': '16.33 cm (6.43 inch) Full HD+ Display',
    'camera': '64MP + 8MP + 2MP | 16MP Front Camera',
    'battery': '4310 mAh Battery',
    'processor': 'MediaTek Dimensity 800U Processor',
    'display2': 'Super AMOLED Display',
    'charger': '50W Fast Charging | Lightweight (176 g) and Slim',
    'warranty': 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories',
    'price': '₹19,999',
  },

  {
    'image': 'https://rukminim1.flixcart.com/image/312/312/kpbipow0/mobile/0/y/d/x7-max-rmx3031-realme-original-imag3kpmyjpyssgq.jpeg?q=70',
    'heading': 'realme X7 Max (Milky Way, 128 GB)',
    'storage': '8 GB RAM | 128 GB ROM',
    'display': '16.33 cm (6.43 inch) Full HD+ Display',
    'camera': '64MP + 8MP + 2MP | 16MP Front Camera',
    'battery': '4500 mAh Battery',
    'processor': 'MediaTek Dimensity 1200 Processor',
    'display2': '120Hz Super AMOLED Display',
    'warranty': '1 Year Warranty for Mobile and 6 Months for Accessories',
    'price': '₹26,999',
  },

  {
    'image': 'https://rukminim1.flixcart.com/image/312/312/kpbipow0/mobile/s/g/j/x7-max-rmx3031-realme-original-imag3kpmjkcmcfvz.jpeg?q=70',
    'heading': 'realme X7 Max (Asteroid Black, 256 GB)',
    'storage': '12 GB RAM | 256 GB ROM',
    'display': '16.33 cm (6.43 inch) Full HD+ Display',
    'camera': '64MP + 8MP + 2MP | 16MP Front Camera',
    'battery': '4500 mAh Battery',
    'processor': 'MediaTek Dimensity 1200 Processor',
    'display2': '120Hz Super AMOLED Display',
    'warranty': '1 Year Warranty for Mobile and 6 Months for Accessories',
    'price': '₹29,999',
  },

  {
    'image': 'https://rukminim1.flixcart.com/image/312/312/kfvfwy80/mobile/5/7/f/realme-7-pro-rmx2170-original-imafw8hatscyavhb.jpeg?q=70',
    'heading': 'realme 7 Pro (Sun Kissed Leather, 128 GB)',
    'storage': '8 GB RAM | 128 GB ROM | Expandable Upto 256 GB',
    'display': '16.26 cm (6.4 inch) Full HD+ Display',
    'camera': '64MP + 8MP + 2MP + 2MP | 32MP Front Camera',
    'battery': '4500 mAh Lithium-ion Battery',
    'processor': 'Qualcomm Snapdragon 720G Processor',
    'display2': 'Super AMOLED Display',
    'charger': '65 W SuperDart Charge',
    'warranty': 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories',
    'price': '₹17,999',
  },

  {
    'image': 'https://rukminim1.flixcart.com/image/312/312/kmmcrrk0/mobile/d/e/m/8-pro-rmx3081-realme-original-imagfgpgfexvzngd.jpeg?q=70',
    'heading': 'realme 8 Pro (Infinite Blue, 128 GB)',
    'storage': '8 GB RAM | 128 GB ROM | Expandable Upto 256 GB',
    'display': '16.26 cm (6.4 inch) Full HD+ Display',
    'camera': '108MP + 8MP + 2MP + 2MP | 16MP Front Camera',
    'battery': '4500 mAh Battery',
    'processor': 'Qualcomm Snapdragon 720G Processor',
    'display2': 'Super AMOLED Display',
    'warranty': 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories',
    'price': '₹19,999',
  },
]

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

buildTable(myArray)

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
