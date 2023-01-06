# 此程式參考自[此](https://github.com/wanghao221/moyu/tree/main/%E6%B8%B8%E6%88%8F-26.%E7%9F%B3%E5%A4%B4%E5%89%AA%E5%88%80%E5%B8%83) 並加以註解
```
// 变量
const choices = [{
        id: 1,
        name: "石头",
        image: "./img/rock.png"
    },{
        id: 2,
        name: "布",
        image: "./img/paper.png"
    },{
        id: 3,
        name: "剪刀",
        image: "./img/scissors.png"
    }]

let playerPoints = document.querySelector(".playerPoints")
let computerPoints = document.querySelector(".computerPoints")
let playerChoiceImg = document.querySelector("#playerChoiceImg")
let playerChoiceTxt = document.querySelector("#playerChoiceTxt")
let computerChoiceImg = document.querySelector("#computerChoiceImg")
let computerChoiceTxt = document.querySelector("#computerChoiceTxt")
let buttons = document.querySelectorAll(".btn")
let points = [0, 0]
let randomNumber;
```
