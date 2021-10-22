let cakeBtn = select('#cakeBtn12');
let counter = select('#counter1');
let countBox = select('.count');
let ordertextarea = select('.order-textarea');
let emptyOrder = select('.empty-order');
let orderSend = select('.order-to-send');
let orderId = select('.order-id');


var cake = [0, "cake.NO1", 70, 0, "cake.NO2", 70, 0, "cake.NO3", 70, 0, "cake.NO4", 70, 0, "cake.NO5", 70, 0, "cake.NO6", 70];

var iceCream = [0, "iceCream.NO1", 70, 0, "iceCream.NO2", 70, 0, "iceCream.NO3", 70, 0, "iceCream.NO4", 70, 0, "iceCream.NO5", 70, 0, "iceCream.NO6", 70];

var cookie = [0, "cookie.NO1", 70, 0, "cookie.NO2", 70, 0, "cookie.NO3", 70, 0, "cookie.NO4", 70, 0, "cookie.NO5", 70, 0, "cookie.NO6", 70];

var cupCake = [0, "cupCake.NO1", 70, 0, "cupCake.NO2", 70, 0, "cupCake.NO3", 70, 0, "cupCake.NO4", 70, 0, "cupCake.NO5", 70, 0, "cupCake.NO6", 70];

var burger = [0, "burger.NO1", 70, 0, "burger.NO2", 70, 0, "burger.NO3", 70, 0, "burger.NO4", 70, 0, "burger.NO5", 70, 0, "burger.NO6", 70];

var pizza = [0, "pizza.NO1", 70, 0, "pizza.NO2", 70, 0, "pizza.NO3", 70, 0, "pizza.NO4", 70, 0, "pizza.NO5", 70, 0, "pizza.NO6", 70];

var fruitJuice = [0, "fruitJuice.NO1", 70, 0, "fruitJuice.NO2", 70, 0, "fruitJuice.NO3", 70, 0, "fruitJuice.NO4", 70, 0, "fruitJuice.NO5", 70, 0, "fruitJuice.NO6", 70];

var soda = [0, "soda.NO1", 70, 0, "soda.NO2", 70, 0, "soda.NO3", 70, 0, "soda.NO4", 70, 0, "soda.NO5", 70, 0, "soda.NO6", 70];

var type = [cake, iceCream, cookie, cupCake, burger, pizza, fruitJuice, soda];

function addToBag(id) {

    var oID = id.nextElementSibling.innerHTML;
    var tID = id.nextElementSibling.nextElementSibling.innerHTML;
    //var oCount = id.previousElementSibling.firstElementChild.innerHTML;
    // oCount = Number(c);

    oID = Number(oID) * 3;
    tID = Number(tID);

    id.previousElementSibling.firstElementChild.innerHTML = ++type[tID][oID];
    if (type[tID][oID] > 0) {
        id.previousElementSibling.style.display = "flex";
    }
};

function cancelCounter(id) {
    var oID = id.parentElement.nextElementSibling.nextElementSibling.innerHTML;
    var tID = id.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.innerHTML;

    oID = Number(oID) * 3;
    tID = Number(tID);

    id.previousElementSibling.previousElementSibling.innerHTML = --type[tID][oID];
    if (type[tID][oID] < 1) {
        id.parentElement.style.display = "none";

    }
}

function ready() {


    var i = 0;
    var allOrderList = "";
    var sentOrderList = "";
    var totalPrice = 0;
    const typeLen = type.length;
    for (i; i < typeLen; i++) {
        var k = type[i];
        var kindLen = k.length;
        var j = 0;
        for (j; j < kindLen; j += 3) {
            if (type[i][j] > 0) {
                allOrderList += " " + type[i][j] + "..." + getOrderName(i, j) + "<br>";
                totalPrice += getOrderPrice(i, j);
                sentOrderList += " " + type[i][j] + "..." + getOrderName(i, j) + "\n";

            }
        }
    }

    function getOrderName(a, b) {
        ++b;
        return type[a][b];
    }

    function getOrderPrice(a, b) {
        c = b;
        b += 2;
        return (type[a][b] * type[a][c]);
    }

    if (totalPrice > 0) {
        ordertextarea.innerHTML = allOrderList + "<br><br> Total price: " + totalPrice;
        orderSend.innerHTML = sentOrderList + "\n\n Total price: " + totalPrice +" " + randomID();
        orderId.innerHTML = "ididid";
        showForm();
    } else {
        emptyOrder.innerHTML = "NOTHING HAS BEEN ORDERD......"
    }

    console.log("ready as fuck");


}
