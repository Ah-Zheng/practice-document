# Docker 指令

## 參考文件

- https://philipzheng.gitbook.io/docker_practice/introduction/what 繁體
- https://yeasy.gitbook.io/docker_practice/compose/compose_file 簡體
- https://juejin.im/post/6844903927184359438 範例：nginx + php-fpm + mysql + redis
- https://juejin.im/post/6844903837774397447#heading-25 範例：nginx + vue

## image

- 查詢映像檔
    $ docker search 關鍵字

- 下載映像檔
    $ docker pull (映像檔名稱)

- 查看所有映像檔
    $ docker images

- 刪除映像檔
    $ docker rmi (images_id)

## container

- 啟動容器
    $ docker run [options] (映像檔)

    [options]
    -t          終端
    -i          交互式操作
    -p          port
    -d          背景執行
    -v          volume
    --name      設定容器名稱
    --rm        容器退出後隨之刪除

- 列出容器
    $ docker ps [options]

    [options]
    -a --all 顯示所有容器，包括未運行的
    -f --filter 根據條件過濾顯示的內容
    -l --latest 列出最近創建的容器
    -n --no-trunc 列出最近創建的N個容器


- 停止容器
    + 單一容器
        $ docker stop (container_id)
    + 所有容器
        $ docker stop $(docker ps -aq)

- 重新啟動容器
    $ docker restart (container_id)

- 刪除容器
    + 單一容器
        $ docker rm (container_id)

    + 所有容器
        $ dcoker rm $(docker ps -aq)

- 執行容器內終端機
    $ docker exec -it (container_id) bash

## docker compose

- 關閉並自動刪除容器
    $ docker-compose down

- 執行docker-compose.yml
    $ docker-compose up [options]

    [options]
    --build

- version: 模板版本號

- services: 服務名稱

- image: 要啟用的映像檔

- build: 指定Dockerfile的路徑

- command: 容器啟動後默認執行的命令

- container_name: 容器名稱

- depends_on: 建立相依關係，確保服務有序性的啟動

- networks: 提供容器可互聯的獨立網路環境

- dns

- tmpfs

- volume: 數據掛載路徑(冒號前是本機路徑，冒號後則為虛擬機內的路徑)

- ports: 暴露的端口
