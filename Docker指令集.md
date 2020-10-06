# Docker 指令

## image

- 查詢映像檔
    $ docker search 關鍵字

- 下載映像檔
    $ docker pull (映像檔名稱)

- 查看映像檔
    $ docker images

- 刪除映像檔
    $ docker rmi (images_id)

## container

- 啟動容器
    $ docker run [options] (映像檔)

    [options]
    -p          port
    -d          背景執行
    -v          volume
    --name      設定容器名稱

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

- version

- services

- image: 要啟用的映像檔

- build: 執行Dockerfile

- command

- container_name: 容器名稱

- depends_on: 設定先啟用的容器

- dns

- tmpfs
