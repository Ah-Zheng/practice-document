# 基本指令

- 建立一個app
    $ heroku create

- 打開所建立的網站網址
    $ heroku open

# 部署 Docker

- 先初始化 git
    $ git init

- 新增 git remote
    $ heroku git:remote -a <專案名>

- 登入
    $ heroku login

- 將本地資料推至 heroku 遠端
    $ heroku container:push web

- 開始部署
    $ heroku container:release web