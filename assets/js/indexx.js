let quantity = document.getElementById('txt_quantity')
let priceIndex = document.querySelector('.origin-prises')
let pricesIndexData = document.querySelector('.origin-prises').getAttribute('data-value')
console.log(priceIndex.innerText)
console.log(pricesIndexData)

btnPlus.addEventListener('click', function () {
    if (quantity.value >= 0) {
        quantity.value = parseInt(quantity.value) + 1;
        priceIndex.innerText = pricesIndexData * quantity.value
    }
})
btnMinus.addEventListener('click', function () {
    if (quantity.value > 0) {
        quantity.value = parseInt(quantity.value) - 1;
        priceIndex.innerText = pricesIndexData * quantity.value
    } else {
        alert("Nhập số lượng lớn hơn 0")
    }
})