# 本程式參考自https://www.youtube.com/watch?v=JDn6OAMnJwQ並加以理解修改
config.php是與資料庫有關的設定檔  
index.php的程式碼中包含了SESSION的確認、登入的表單  
register.html包含了簡單的檢核機制、註冊的表單  
login.php負責處理登入的動作  
welcome.php是使用者成功登入後看到的畫面  
之後可以透過$_SESSION控制不同身分使用者看到不同畫面  
# 展示
1.註冊頁面  
![image](https://github.com/yuanxiii/ws111a/blob/main/1.png)  
2.註冊成功跳轉  
![image](https://github.com/yuanxiii/ws111a/blob/main/2.png)  
3.登入  
![image](https://github.com/yuanxiii/ws111a/blob/main/3.png)  
4.透過用$_SESSION傳遞了username並顯示出來  
![image](https://github.com/yuanxiii/ws111a/blob/main/4.png)  
