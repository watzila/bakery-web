var changePage = document.querySelector(".changePage");//登入註冊換頁div
var changeBTN = document.getElementsByTagName("button");//登入註冊換頁按鈕
var currentPage = document.getElementsByClassName("change");//登入註冊個別div
var form = document.getElementsByTagName("form");//登入註冊表單

var chooseAmount = document.getElementsByClassName("chooseAmount");//數量格
var price = document.getElementsByClassName("price");//小計
var itemCount = document.getElementById("itemCount");//商品總數
var billPrice = document.getElementById("billPrice");//總商品小計
var totlePrice = document.getElementById("totlePrice");//總價

var homeIMGBox = document.querySelector(".homeIMGBox");//輪播圖盒子

//給button點擊事件
for (let i = 0; i < changeBTN.length; i++) {
  changeBTN[i].addEventListener("click", function () {
    loginRegister(i);
  });
}

//登入註冊畫面左右更換顯示
function loginRegister(num) {
  //左右移動
  changePage.style.right = (num == 0) ? "50%" : "0%";
  changePage.style.borderWidth = (num == 0) ? "3px 0 3px 3px" : "3px 3px 3px 0"

  //登入註冊畫面隱藏或顯示
  for (i = 0; i < changeBTN.length; i++) {
    currentPage[i].className = (num == i) ? "change" : "change current";
    form[i].className = (num == i) ? "" : "current";
  }
}

//數量加
function add(count, id = null, price = null) {
  if (id == null) {
    chooseAmount[0].value = count * 1 + 1;
  } else {
    chooseAmount[id].value = count * 1 + 1;
    updatePrice(id, price);
  }
}

//數量減
function reduce(count, id = null, price = null) {
  if (id == null) {
    chooseAmount[0].value = (count <= 0) ? "0" : count * 1 - 1;
  } else {
    chooseAmount[id].value = (count <= 1) ? "1" : count * 1 - 1;
    updatePrice(id, price);
  }
}

//項目小計
function updatePrice(id, price) {
  var money = chooseAmount[id].value * price;
  var oldPrice = this.price[id].innerHTML;//獲得舊的小計價格
  this.price[id].innerHTML = money;

  var newCount = (money - oldPrice) / price;//計算加了多少數量
  var changePrice = money - oldPrice;//計算加了多少價格
  bill(newCount, changePrice);
}

//帳單
function bill(type, price) {
  var num = itemCount.innerText * 1;
  var money = billPrice.innerText.replace("$", "") * 1;
  itemCount.innerText = num + type;
  billPrice.innerText = "$" + (money + price);
  totlePrice.innerText = billPrice.innerText.replace("$", "") * 1 + 60 - 10;
}

function carouselIMG() {
  //console.log(11);
  var newPosition = homeIMGBox.style.transform;
  console.log(newPosition);
  //homeIMGBox.style.transform = "translateX(-100%)";
}
