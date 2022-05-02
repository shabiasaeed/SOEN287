//Accesing each element input
let inputQty = document.getElementById("cart-quantity-input");
// let inputTotal1 = document.getElementById("total-cost");
// let inputTotal = document.getElementById("cart-button");



//Saving data before the page reloads
window.onbeforeunload = function() {
    
    if (inputQty.value) {
      sessionStorage.setItem("savedQty",inputQty.value);
    }

}

//Placing the previously saved data into the box when page is loading
window.onload = function() {

        // If values are not blank, restore them to the fields
        let quantity = sessionStorage.getItem("savedQty");
        if (quantity !== null) {
          inputQty.value = quantity;
        }

      
    }
