//==============================================PLUS AND MINUS BUTTONS====================================================
var quantityValue = document.getElementById("item-quantity-chosen").value;

//--------------------------------------PLUS BUTTON---------------------------------------------
document.querySelector(".plus-quantity-button").addEventListener("click", function () {  
  quantityValue++;
  document.getElementById("item-quantity-chosen").value = quantityValue;
});

//--------------------------------------MINUS BUTTON--------------------------------------------- 
document.querySelector(".minus-quantity-button").addEventListener("click", function () {   
  if (quantityValue > 1){
    quantityValue--;
  document.getElementById("item-quantity-chosen").value = quantityValue;
  }
});

//============================================CALCULATOR======================================================================
var totalPrice = parseFloat(document.getElementById("cost-of-item").value);
var itemQuantityPurchased = 0;
var displayedPrice = document.getElementById("total-cost").textContent;

function cost(){
  itemQuantityPurchased += parseInt(quantityValue);
  var totalPrice = itemQuantityPurchased*3.50;
  sessionStorage.setItem("previous-total-price1", totalPrice);
  displayPrice();
}

//=======================================FUNCTIONAL ADD TO CART BUTTON======================================================
document.getElementById("addToCartButton").addEventListener("click", function () {
  cost();
});

//=======================================DATA STORAGE=======================================================================
//STORE ALL TYPES OF DATA NEEDED
window.onbeforeunload = function saveChanges() {
   if (quantityValue >= 1)
     sessionStorage.setItem("previous-quantity-input1", quantityValue);
    if (itemQuantityPurchased > 0)
     sessionStorage.setItem("previous-quantity-already-in-cart1", itemQuantityPurchased);
 }

 //KEEPS VALUES IF THE PAGE IS REFRESHED
window.onload = function applyChanges() {
   if (previousQuantityInput >= 1){
     document.getElementById("item-quantity-chosen").value = previousQuantityInput;
   } else {
     document.getElementById("item-quantity-chosen").value = 1;
   }
   quantityValue = document.getElementById("item-quantity-chosen").value;
  
   if (previousTotalPrice > 0){
     document.getElementById("cost-of-item").value = previousTotalPrice;
   } else {
     document.getElementById("cost-of-item").value = 0;
   }
   totalPrice = parseFloat(document.getElementById("cost-of-item").value);
  
  if (previousItemQuantityPurchased > 0){
   itemQuantityPurchased = previousItemQuantityPurchased;
  } else {
   itemQuantityPurchased = 0;
  }
  displayPrice();
}

var previousQuantityInput = parseInt(sessionStorage.getItem("previous-quantity-input1"));
var previousTotalPrice = parseFloat(sessionStorage.getItem("previous-total-price1"));
var previousItemQuantityPurchased = parseInt(sessionStorage.getItem("previous-quantity-already-in-cart1"));
