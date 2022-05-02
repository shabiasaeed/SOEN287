function displayPrice(){
  //----------------------------Declare totals here-----------------------------
  var total1 = parseFloat(sessionStorage.getItem("previous-total-price1"));
  var total2 = parseFloat(sessionStorage.getItem("previous-total-price2"));

  //-----------------------Correction needed-------------------------------
  if (total1 > 0){
    total1 = total1;
  } else {
    total1 = 0;
  }
  sessionStorage.setItem("previous-total-price2", total1);

  if (total2 > 0){
    total2 = total2;
  } else {
    total2 = 0;
  }
  sessionStorage.setItem("previous-total-price2", total2);

  //------------------------Making the sum------------------------
  var sum = total1 + total2;
  sum = sum.toFixed(2);

  //---------------------Didsplaying the sum
  if (sum > 0)
  document.getElementById("total-cost").textContent = "$" + sum;
}