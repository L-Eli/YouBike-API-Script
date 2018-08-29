# YouBike API Script

***用 php 寫 script 取得 YouBike（微笑單車）的站點資訊及狀態～***

## 1. 取得各站點資訊

執行 script 取得 YouBike 各站點資訊。
```
> php get-stations.php
```

#### 執行畫面：
![Get Stations](./img/Get%20Stations.png)

執行後產生 `/data/stations.json`。

## 2. 取得各站點狀態

執行 script 取得 YouBike 各站點狀態。**（可使用作業系統排程執行，定期取得狀態資訊。）**
```
> php get-status.php
```

#### 執行畫面：
![Get Stations](./img/Get%20Status.png)

執行後產生 `/data/status/[年年年年月月日日時時分分秒秒].json`。

URL： [YouBike API Endpoint](http://data.ntpc.gov.tw/od/data/api/54DDDC93-589C-4858-9C95-18B2046CC1FC?$format=json)
