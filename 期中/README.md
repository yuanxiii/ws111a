# 此程式參考自[此](https://github.com/wanghao221/moyu/tree/main/%E6%B8%B8%E6%88%8F-26.%E7%9F%B3%E5%A4%B4%E5%89%AA%E5%88%80%E5%B8%83) 並加以註解  
## JS建立  
先創立了一個對象，習中包含石頭剪刀布的文本格式，然後將圖像源也一併加入。  
下面創建了points的變量來儲存分數  
還有1~3的變數來顯示電腦的石頭剪刀布。  
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
  
   
## 添加事件監聽器  
這裡使用了forEach()方法將事件監聽器婦到了按鈕上  

```
// 事件监听
buttons.forEach((button) => {
    button.addEventListener("click", () => {
        if (button.textContent === "石头") {
            playerChoiceImg.src = choices[0].image;
            playerChoiceTxt.textContent = choices[0].name;
        } else if (button.textContent === "布") {
            playerChoiceImg.src = choices[1].image;
            playerChoiceTxt.textContent = choices[1].name;
        } else if (button.textContent === "剪刀") {
            playerChoiceImg.src = choices[2].image;
            playerChoiceTxt.textContent = choices[2].name;
        }
        getComputerChoice();
        console.log(points);
    })
})
```
正如大家在上面代码中看到的那样，我使用 if-else 语句以及根据按钮的 textContent 来定义哪个按钮执行什么操作。  
上面使用了if-else語句根據textContent來定義哪個按鈕要做啥  
舉個例子：  
如果按鈕本身有石頭文字，那會在playerChoiceTxt中顯示石頭，然後把playerChoiceImg的圖源更改為存在對象中的圖，剪刀和布也一樣。  
```
// 选择功能
function getComputerChoice() {
    computerChoiceImg.src = "./img/gif.gif"
    setTimeout(() => {
        randomNumber = Math.floor(Math.random() * 3);
        computerChoiceImg.src = choices[randomNumber].image;
        computerChoiceTxt.textContent = choices[randomNumber].name;
        gameRules();
        playerPoints.textContent = points[0];
        computerPoints.textContent = points[1];
        whoWon();
    }, 1000);
}
```
上面是電腦選擇功能  
1.用剪刀石頭布三張圖片做成了gif循環  
![image](https://github.com/yuanxiii/ws111a/blob/main/%E5%89%AA%E5%88%80%E7%9F%B3%E9%80%8F%E5%B8%83.gif)  
2.setTimeout是負責動畫時長的  
## 函數gameRules()  
```
function gameRules() {
    if (playerChoiceTxt.textContent === choices[0].name && computerChoiceTxt.textContent === choices[1].name) {
        points[1]++;
    } else if (playerChoiceTxt.textContent === choices[1].name && computerChoiceTxt.textContent === choices[2].name) {
        points[1]++;
    } else if (playerChoiceTxt.textContent === choices[2].name && computerChoiceTxt.textContent === choices[0].name) {
        points[1]++;
    } else if (playerChoiceTxt.textContent === computerChoiceTxt.textContent) {
        console.log("draw");
    } else {
        points[0]++;
    }
}
```
這個函數檢查玩家選了什麼並cheak和電腦的勝負，誰贏了誰加一分。  
## 函數whoWon()  
```
function whoWon() {
    if (points[0] === 10) {
        alert("你干掉了AI成功取得胜利!")
        points = [0, 0];
    } else if (points[1] === 10) {
        alert("你被人工智能打败了!")
        points = [0, 0];
    }
}
```
檢查有沒有人到十分，到十分重置
