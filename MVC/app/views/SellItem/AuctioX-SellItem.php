<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="~/../css/AuctioX-SellItem.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sell</title>
  </head>
  <body>
    <div class="centru">
      <h1>Add an Item..</h1>
<div class="container">
  <label for="title"><b>Product Name</b></label>
  <input type="text" placeholder="Product Name.." name="title" id="title" required>

  <label for="price"><b>Enter a Price</b></label>
  <input type="text" placeholder="Price in €.." name="price" id="price" required>

  <label for="specialCharacteristics"><b>Enter Special Characteristics..</b></label>
  <input type="text" placeholder="Special Characteristics.." name="specialCharacteristics" id="specialCharacteristics" required>

  <label for="selectCondition"><b>Select Condition</b></label>
  <div class="custom-select" style="width:200px;">
  <select name = "conditions" id="conditions">
    <option value="FactoryNew">Factory New</option>
    <option value="MinimalWear">Minimal Wear</option>
    <option value="Field-Tested">Field-Tested</option>
    <option value="Well-Worn">Well-Worn</option>
    <option value="Battle-Scared">Battle-Scared</option>
  </select>
  </div>

  <label for="country"><b>Enter Country</b></label>
  <input type="text" placeholder="Country.." name="country" id="country" required>

  <label for="description"><b>Enter a description</b></label>
  <textarea style="width:99%; height:150px" type="text" placeholder="Description.." required name="description" id="description"></textarea>

<button type="button" onclick = "adaugaInBazaDeDate()">Submit</button>
</div>
</form>
</div>
  </body>
  <script>
  function adaugaInBazaDeDate(){

        var title = document.getElementById("title").value;
        var price = document.getElementById("price").value;
        var specialCharacteristics = document.getElementById("specialCharacteristics").value;
        var conditions = document.getElementById("conditions").value;
        var country = document.getElementById("country").value;
        var description = document.getElementById("description").value;
          console.log(title);
          console.log(price);
          console.log(specialCharacteristics);
          console.log(conditions);
          console.log(country);
          console.log(description);

          let xhr2 = new XMLHttpRequest();
        xhr2.open("POST", "http://localhost/ProiectTW/MVC/public/SellItem/adaugaInDB");
        xhr2.addEventListener("load", function loadCallback() {
            switch (xhr2.status) {
                case 200:
                    //window.location.assign("http://localhost/ProiectTW/MVC/public/Login/AuctioX-Login.php");
                    console.log("Success, ai inserat in baza de date" + xhr2.response);
                    break;
                case 404:
                    console.log("Oups! Not found");
                    break;
            }
        });
        xhr2.addEventListener("error", function errorCallback() {
            console.log("Network error");
        });
        let payload = {
          title: `${title}`,
          price: `${price}`,
          specialCharacteristics: `${specialCharacteristics}`,
          conditions: `${conditions}`,
          country: `${country}`,
          description: `${description}`
            }
        xhr2.send(JSON.stringify(payload));
          }


</script>
</html>
