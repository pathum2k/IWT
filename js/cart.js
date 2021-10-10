if(document.readyState=="Loading"){
	document.addEventListener('DOMContentLoaded',ready)
}else{
	ready()
}

function ready(){
	var removeCart= document.getElementsByClassName(Button)
	for(var i=0; i<removeCart.lenghth; i++){
		var button= removecart[i]
		button.addEventListener('click', remove CartItem)
	}
	var quantity-input= document.getElementsByClassName('cart-quantity-input')
	for (var i=0; i< quantityInputs.length; i++){
		var input= QuantityInputs[i]
		input.addEventListener('change', quantityChanged)
	}
}
	function removeCartItem(event){	
		var buttonClicked= event.target
		buttonClicked.parentElement.parentElement.remove()
		updatecartTotal()
	}
	
	function quantityChanged(event){
		var input= event.target
		if(isNaN(input.values) || input.values <=0){
		}
	}
	
	Function addtoCartclicked(event){
		var button= event.target
		var shopitem= shopitem.getElementsByClassName('shop-item-title')[0]'innerText
		var shopprice= shopitem.getElementsByClassName('shop-item-price')[0]'innerText
		var imgscr= shopitem.getElementsByClassName('shop-item-image')[0]'src
		console.log(title,price,imagescr)
		additem to cart(title,price,imagescr)
	}
	function additem to cart(title,price,imagescr){
		var cartRow= document.createElement('div')
		var cartItems= document.getElementsByClassName('cart-items')[0]
		var cartRowcontent=
		<div class="cart item cart column">
		<img class="cart-item-image" src="image/vegetable.png" 
		width="100" height="100">
		<span class="cart-item-title">vegitables</span>
		</div>
		<span class="cart-price cart-column">$20.12</span>
		<div class="cart-quantity cart-column">
			<input class="cart-quantity input" type= "number" value="1"
			<br><br>
			<button type="button"
			class="block">REMOVE</button>
		</div>
		cartRow.innerHTML= cartRowcontents
		cartItems.append(cartRow)
	}
	
	
	
		
	Function updatecartTotal(){
		var cartItemContainer = document.getElementsByClassName('cart-items')[0]
		var cartRows = cartItemContainer.getElementsByClassName('cart-row')
		for(var i=0; i< cartRows.Length; i++){
			var cartRow = cartRows[i]
			var priceElement = cartRow.getElementsByClassName('cart-price')[0]
			var quantityElement= CartRow.getElementsByClassName('cart-quantity-input')
			[0]
			var price= parsefloat(priceElement,innerText.replace('$', ''))
			var quantity = quantityElement.value
			total= total+(price*quantity)
		}
	document.getElementsByClassName('cart-total-price')[0].innerText=$+ total
	}