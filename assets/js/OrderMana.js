const orderType1s = document.querySelectorAll('.order-mana-con-status-1')
const orderType2s = document.querySelectorAll('.order-mana-con-status-2')
const orderType3s = document.querySelectorAll('.order-mana-con-status-3')
const orderType4s = document.querySelectorAll('.order-mana-con-status-4')
const orderShip1s = document.querySelectorAll('.order-mana-con-status-1 .js-status-ship')
const orderShip2s = document.querySelectorAll('.order-mana-con-status-2 .js-status-ship')
const orderShip3s = document.querySelectorAll('.order-mana-con-status-3 .js-status-ship')
const orderShip4s = document.querySelectorAll('.order-mana-con-status-4 .js-status-ship')
const orderTitle1s = document.querySelectorAll('.order-mana-con-status-1 .js-title-status')
const orderTitle2s = document.querySelectorAll('.order-mana-con-status-2 .js-title-status')
const orderTitle3s = document.querySelectorAll('.order-mana-con-status-3 .js-title-status')
const orderTitle4s = document.querySelectorAll('.order-mana-con-status-4 .js-title-status')

window.addEventListener('load', function () {
    for (let i = 0; i < orderShip1s.length; i++) {
        let orderShip1 = orderShip1s[i];
        let orderTitle1 = orderTitle1s[i]
        orderShip1.innerText = "Đang xử lý"
        orderTitle1.innerText = "Chờ xác nhận"
    }
})
window.addEventListener('load', function () {
    for (let i = 0; i < orderShip2s.length; i++) {
        let orderShip2 = orderShip2s[i];
        let orderTitle2 = orderTitle2s[i]
        orderShip2.innerText = "Đang giao"
        orderTitle2.innerText = "Đã xác nhận"
    }
})
window.addEventListener('load', function () {
    for (let i = 0; i < orderShip3s.length; i++) {
        let orderShip3 = orderShip3s[i];
        let orderTitle3 = orderTitle3s[i]
        orderShip3.innerText = "Giao hàng thành công"
        orderTitle3.innerText = "Đã nhận"
    }
})
window.addEventListener('load', function () {
    for (let i = 0; i < orderShip4s.length; i++) {
        let orderShip4 = orderShip4s[i];
        let orderTitle4 = orderTitle4s[i]
        orderShip4.innerText = "Giao hàng không thành công"
        orderTitle4.innerText = "Đã hủy"
    }
})
let orderManaPrices = document.querySelectorAll('.orderManaPrice')
let orderManaQts = document.querySelectorAll('.orderManaQt')
let orderManaTotals = document.querySelectorAll('.orderManaTotal')
let isorderManaPrices = parseInt(orderManaPrices)