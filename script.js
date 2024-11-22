function addToCart(item, price) {
    let quantity = document.getElementById(item.toLowerCase() + '-qty').value;
    let total = quantity * price;
    let order = item + " x " + quantity + " = ₹" + total + "\n";
    
    // Store order and total in localStorage
    localStorage.setItem('order', (localStorage.getItem('order') || '') + order);
    localStorage.setItem('total', (parseInt(localStorage.getItem('total') || 0) + total));

    // Redirect to order page
    window.location.href = 'order.html';
}
