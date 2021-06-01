# Laravel 8 健保特約藥局口罩庫存地圖

健保署口罩管控系統開放時間為 7 時至 23 時，口罩開放購買時間及方式，視各家健保特約藥局及衛生所作業而定。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/` 來瀏覽口罩庫存地圖。

----

## 畫面截圖
![](https://i.imgur.com/AGntaUr.png)
> 健保署運用健保資訊網路及健保卡，於 2 月 6 日採用實名登錄的方式在健保署特約藥局開賣口罩

![](https://i.imgur.com/X5qZMqG.png)
> 口罩實名制第 35 輪續購日期於 5 月 24 日起至 5 月 30 日選擇超商取貨者可以續購，於 5 月 31 日 起至 6 月 2 日開放所有民眾預購，取貨時間則為 6 月 7 日至 6 月 20 日，本輪一樣為一次預購 10 片、一片 4 元