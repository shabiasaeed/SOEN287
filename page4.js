if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    updateCartTotal()
    ready()
}

function ready(){
    var removeButtons = document.getElementsByClassName('remove')
    console.log(removeButtons)
    for(var i=0; i<removeButtons.length; i++){
        var button = removeButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for(var i=0; i<quantityInputs.length; i++){
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)

    }
}


function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}


function quantityChanged(event){
    var input = event.target
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1
    }
    updateCartTotal()
}


function updateCartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')

    var total = 0
    var totalQuantity = 0
    var QSTPrice = 0
    var GSTPrice = 0
    var estimatedTotal = 0

    for(var i=0; i<cartRows.length; i++){
        var cartRow=cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')
        [0]
        console.log(priceElement,quantityElement)
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price*quantity)
        var totalQuantity = parseInt(totalQuantity) + parseInt(quantity)

    }
    total = Math.round(total*100)/100
    document.getElementsByClassName('subTotal')[0].innerText = '$'+ total
    document.getElementsByClassName('numProduct')[0].innerText = parseInt(totalQuantity)
    QSTPrice = Math.round((total*0.1)*100)/100
    document.getElementsByClassName('QST')[0].innerText = '$' + QSTPrice
    GSTPrice = Math.round((total*0.05)*100)/100
    document.getElementsByClassName('GST')[0].innerText = '$' + GSTPrice
    estimatedTotal = Math.round((total+QSTPrice+GSTPrice)*100)/100
    document.getElementsByClassName('estimatedTotal')[0].innerText = '$' + estimatedTotal
    document.getElementById("price-icon").innerText='$'+total
}