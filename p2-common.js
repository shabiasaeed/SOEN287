window.onpageshow = function displayPrice() {
  //----------------------------Declare totals here-----------------------------
  var total0 = parseFloat(sessionStorage.getItem("previous-total-price0"));
  var total1 = parseFloat(sessionStorage.getItem("previous-total-price1"));
  console.log(total1);
  var total2 = parseFloat(sessionStorage.getItem("previous-total-price2"));
  var total3 = parseFloat(sessionStorage.getItem("previous-total-price3"));
  var total4 = parseFloat(sessionStorage.getItem("previous-total-price4"));
  var total5 = parseFloat(sessionStorage.getItem("previous-total-price5"));
  var total6 = parseFloat(sessionStorage.getItem("previous-total-price6"));
  var total7 = parseFloat(sessionStorage.getItem("previous-total-price7"));
  var total8 = parseFloat(sessionStorage.getItem("previous-total-price8"));
  var total9 = parseFloat(sessionStorage.getItem("previous-total-price9"));
  var total10 = parseFloat(sessionStorage.getItem("previous-total-price10"));
  var total11 = parseFloat(sessionStorage.getItem("previous-total-price11"));
  var total12 = parseFloat(sessionStorage.getItem("previous-total-price12"));
  var total13 = parseFloat(sessionStorage.getItem("previous-total-price13"));
  var total14 = parseFloat(sessionStorage.getItem("previous-total-price14"));
  var total15 = parseFloat(sessionStorage.getItem("previous-total-price15"));

  //-----------------------Correction needed-------------------------------
  if (total0 > 0) {
    total0 = total0;
  } else {
    total0 = 0;
  }
  sessionStorage.setItem("previous-total-price0", total0);

  if (total1 > 0) {
    total1 = total1;
  } else {
    total1 = 0;
  }
  sessionStorage.setItem("previous-total-price1", total1);

  if (total2 > 0) {
    total2 = total2;
  } else {
    total2 = 0;
  }
  sessionStorage.setItem("previous-total-price2", total2);

  if (total3 > 0) {
    total3 = total3;
  } else {
    total3 = 0;
  }
  sessionStorage.setItem("previous-total-price3", total3);

  if (total4 > 0) {
    total4 = total4;
  } else {
    total4 = 0;
  }
  sessionStorage.setItem("previous-total-price4", total4);

  if (total5 > 0) {
    total5 = total5;
  } else {
    total5 = 0;
  }
  sessionStorage.setItem("previous-total-price5", total5);

  if (total6 > 0) {
    total6 = total6;
  } else {
    total6 = 0;
  }
  sessionStorage.setItem("previous-total-price6", total6);

  if (total7 > 0) {
    total7 = total7;
  } else {
    total7 = 0;
  }
  sessionStorage.setItem("previous-total-price7", total7);

  if (total8 > 0) {
    total8 = total8;
  } else {
    total8 = 0;
  }
  sessionStorage.setItem("previous-total-price8", total8);

  if (total9 > 0) {
    total9 = total9;
  } else {
    total9 = 0;
  }
  sessionStorage.setItem("previous-total-price9", total9);

  if (total10 > 0) {
    total10 = total10;
  } else {
    total10 = 0;
  }
  sessionStorage.setItem("previous-total-price10", total10);

  if (total11 > 0) {
    total11 = total11;
  } else {
    total11 = 0;
  }
  sessionStorage.setItem("previous-total-price11", total11);

  if (total12 > 0) {
    total12 = total12;
  } else {
    total12 = 0;
  }
  sessionStorage.setItem("previous-total-price12", total12);

  if (total13 > 0) {
    total13 = total13;
  } else {
    total13 = 0;
  }
  sessionStorage.setItem("previous-total-price13", total13);

  if (total14 > 0) {
    total14 = total14;
  } else {
    total14 = 0;
  }
  sessionStorage.setItem("previous-total-price14", total14);

  if (total15 > 0) {
    total15 = total15;
  } else {
    total15 = 0;
  }
  sessionStorage.setItem("previous-total-price15", total15);

  //------------------------Making the sum------------------------
  var sum =
    total0 +
    total1 +
    total2 +
    total3 +
    total4 +
    total5 +
    total6 +
    total7 +
    total8 +
    total9 +
    total10 +
    total11 +
    total12 +
    total13 +
    total14 +
    total15;

  sum = sum.toFixed(2);

  //---------------------Didsplaying the sum
  if (sum > 0) document.getElementById("total-cost").textContent = "$" + sum;
};
