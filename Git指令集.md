## 基本指令

  + 初始化

    > $ git init

  + 顯示設定值

    > $ git config --list
		>
    > or
		>
    > $ git config -l

  + 設定顯示使用者名稱

    > $ git config --global user.name (名字)

  + 設定顯示信箱

    > $ git config --global user.email (信箱)

  + 指令短寫法

    > $ git config --global alias.<短寫指令> [ <想短寫的指令> | "<想短寫的指令> --功能"]

  + 短寫指令清單

    > $ git config --get-regexp alias
    >
    > or
    >
    > $ git config --list

  + 清除用戶(慎用)

    > $ git credential-manager delete https://github.com

  + 加入索引(清單)

    > $ git add  (. 全部 | 檔案名)

  + 放入儲存庫

    > $ git commit [檔案名] -m (描述)

  + 當前狀態

    > $ git status

  + 詳細 commit 紀錄

    > $ git log

  + 簡易 commit 紀錄

    > $ git log --oneline

  + 簡易 commit 紀錄 + 線圖( graph )

    > $ git log --oneline --graph

  + 將檔案從"工作目錄"移除

    > $ git rm (檔案名)

  + 將檔案從"索引"移除

    > $ git reset [檔案名]
		>
    > or
		>
    > $ git rm --cached (檔案名)

  + 返回至指定 commit 的狀態

    > $ git reset --hard (CommitId前六碼)

  + 查看指令

    > $ git --help
    >
    > or
    >
    > $ git (指定功能) -h

## 分支

  + 顯示當前分支

    > $ git branch

  + 建立分支

    > $ git branch (分支名)

  + 切換分支

    > $ git checkout (分支名)

  + 建立分支並切換分支

    > $ git checkout -b (分支名)

  + 刪除分支(要先跳出要刪除的分支)

    > $ git branch -d (分支名)
		>
    > $ git branch -D (分支名)

  + 恢復刪除的分支

    1.查詢指令紀錄
      > $ git reflog

    2.恢復分支至 commit 節點
      > $ git branch -d (分支名)

## 分支合併

  + 將分支合併至主分支(master)，先將分支切換至master

    > $ git checkout master
		>
    > $ git merge (分支名)

  + 恢復至合併前

    > $ git reset --hard (合併前最後一次commit節點ID)
		>
    > or
		>
    > $ git reset --hard '遠端分支'

  + 快轉合併(Fast-Forward)，前提是開分支後，master沒有提交新的commit

    > $ git merge (分支名)         => 有使用快轉合併
		>
    > $ git merge --no-ff (分支名) => 不要使用快轉合併

  + 分支合併衝突(分別在主分支和分支修改同一檔案)

    > $ git merge (分支名) => 此時會產生衝突，點開衝突檔案並選擇要合併哪個版本
		>
    > $ git add (衝突檔案名)
		>
    > $ git commit [檔案名] -m (描述)



  + 重新處理衝突問題，返回至合併前

    > $ git reset --hard HEAD~1 => 返回至上一個 commit 節點

  + 輕量級標籤(在當前的commit加上標籤)

    > $ git tag (標籤名)

  + 含有附註的標籤

    > $ git tag -a (標籤名) -m (描述)

  + 查看當前標籤名及描述

    > $ git tag -n

  + 刪除標籤

    > $ git tag -d (標籤名)

  + 實際開發程式，分支規劃

    1. "master" (正式上線分支)

    2. "develop" (開發分支)

    3. "hotfix" (緊急修補分支)

			※ 由 master 分支出來，可合併至 master 和 develop，用途是解決正式版上線的bug

    4. "feature" (功能分支)

			※ 由 develop 分支出來，可合併至 develop，用途是開發新功能

    5. "release" (釋出版本分支)

			※ 由 develop 分支出來，可合併至 master 和 develop。用途是開發下一版本，也就是開發完成準備釋出時要建立，此分支只會針對該本版 bug 做修改及 commit 而已，但請不要在 release 繼續開子分支。

## 暫存

  + 暫存

    > $ git stash -u
		>
    > or
		>
    > $ git stash save -u (描述)

  + 查看暫存清單

    > $ git stash list

  + 恢復暫存

    > $ git stash pop // 回復最新的暫存
    >
    > or
    >
    > $ git stash apply stash@{號碼} // 回復指定的暫存且不刪除暫存紀錄

  + 清除暫存

    > $ git stash clear // 清除所有暫存
    >
    > $ git stash drop stash@{號碼} // 清除指定暫存

## GitHub建立遠端儲存庫 (初始 commit 由本地建立)

  + 先至GtHub建立專案，是否建立 README.md 檔案，選否(不勾選)

  + 將專案clone下來

    > $ git clone https://github.com/:GitHub帳號/:專案名.git

  + 此時輸入指令 $ git log 會發現尚未有 commit 紀錄，所以要在本地端建版本(clone 下來時已建立 git 版控)
    1. 建立 README.md 描述檔

        > $ echo "# Git Test" > README.md

    2. 加入本地端"索引"

        > $ git add .

    3. 提交 commit 紀錄

        > $ git commit -m 'init'

    4. 第一次上傳至遠端(GitHub)

        > $ git push origin master
			  >
        > or
			  >
        > $ git push -u origin master // 若加入 -u 參數，下次 pull 時可以直接不指定分支，直接參照 push 的分支

  + 只查詢遠端名稱

    > $ git remote

  + 查詢遠端詳細位置

    > $ git remote -v

  + 刪除遠端練線
    > $ git remote remove (遠端名稱)

  + 重新命名遠端
    > $ git remote rename (舊名稱) (新名稱)

## GitHub建立遠端儲存庫 (初始 commit 由遠端建立)

  + 先至GtHub建立專案，是否建立 README.md 檔案，選是(勾選)

  + 將專案clone下來

    > $ git clone https://github.com/:GitHub帳號/:專案名.git

  + 此時輸入指令
	> $ git log

		※ 會發現已有 commit 紀錄，且資料夾內已有 README.md 檔案(clone 下來時已建立 git 版控)

## 將本地已存在的儲存庫(已有版控)，上傳至遠端儲存庫

  + 先在 GitHub 建立一個沒有"初始版本(commit)"的儲存庫

  + 首先先將本地與遠端儲存庫建立連接

    > $ git remote add origin https://github.com/{GitHub帳號}/{專案名}.git
		>
		> or
		>
    > $ git remote set-url --add origin https://github.com/{GitHub帳號}/{專案名}.git

  + 確定是否有連成功

    > $ git remote
		>
    > or
		>
    > $ git remote -v

  + 將本地上傳至遠端

    > $ git push -u origin master

    	※ 若程式有建立其他分支或是標籤，在 push 時，改以下指令
        $ git push --all
          or
        $ git push --tags

## 遠端多人合作開發 - 單分支(master)

  + 當遠端有更新，本地端也要先更新

    > $ git pull origin master // pull 等於同時執行 fetch + merge
		>
    > or
		>
    > $ git pull

  + pull 下來之後查看圖示會發現像是分支的圖示(有耳朵)，不想要的話就使用以下指令

    > $ git pull --rebase origin master

		※ 使用--rebase ，後續 commit 的 ID 有可能會被改變，若新版本尚未 push 上去，則不用擔心其他人版本亂掉的問題。

  + 不使用 pull ，改採 fetch + merge 的方式，先用 fetch 將最新版本抓下來

    > $ git fetch origin master
		>
    > $ git merge origin/master // 將抓下的更新做合併

  + 遠端多人合作使用單分支開發基本流程

		※ 一開始先有人在遠端建好儲存庫，接著團隊中的每個人都 clone 一份完整的儲存庫到自己的電腦，接下來若有人寫了新的版本就 push 上遠端，其他人要這個新版本就 pull 下來自己的電腦，如此循環就完成了版本控制。
        $ git clone https://github.com/{GitHub帳號}/{專案名}.git
        $ git push -u origin master
        $ git pull origin master

## 創建分支

  + 打開 GitLab

  + 新增 issue (title要打)

    > ex: [ Fixed | Added | Deleted | Changed ]/add-some-function 新增方法

  + 建立分支

  + 本地端更新分支資料

    > $ git pull
		>
    > or
		>
    > $ git fetch -p

  + 切換至分支

    > $ git checkout '分支名'

## 在一台電腦使用多個 Git 帳號

- 先產生 SSH-KEY 並儲存至指定位置
  $ ssh-keygen -t rsa -C (jerry092383@gmail.com)

- 將 SSH-Key 貼至 Github 中

- 將私鑰加到 ssh-agent 中，若有重啟電腦，需要重新此段
  $ ssh-add ~/.ssh/id_rsa_personal

- 修改 Config 檔資料
  $ vi ~/.ssh/config

  #Default GitHub
  Host github.com
    HostName github.com
    User git
    IdentityFile ~/.ssh/id_rsa
  #New GitHub
  Host github-personal
    HostName github.com
    User git
    IdentityFile ~/.ssh/id_rsa_personal


- 測試是否正常
  $ ssh -T (git@jerry092383@gmail.com)

- 取消 Global 設定，避免 pull 資料時會使用 Global 的 Mail 或 UserName
  $git config — global — unset user.name
  $git config — global — unset user.email

- 設定各 Repository 的 User 資料
  $git config  user.email "userName@address"
  $git config  user.name "userName"

## 上開發站流程

  + 於 skype 通知要上開發及測試

    > ex: on onion dev qa

  + 於自己分支 add、commit，並推上遠端

    > $ git add .
		>
    > $ git commit -m '[ Fixed | Added | Deleted | Changed ]描述'
		>
    > $ git push

  + 切換至 develop 分支並先 pull 更新

    > $ git checkout develop
		>
    > $ git pull

  + 將自己的分支 merge 至 develop

    > $ git merge '分支名'

  + 執行打包

    > $ yarn build

        ※ 若在打包時報錯，則需回到原分支修改

          1. 先回復至打包前

          2. 將本地端的 develop 分支回復至遠端最新的狀態 (前提是未推上遠端之前)
            $ git reset --hard origin/develop

          3. 再切換回自己的分支做修改

  + 推上 GitLab、Google

    > $ git add --all
    >
    > $ git commit -m 'build 專案名'
		>
    > $ git push
		>
    > $ git push xpn_google develop

## 上測試站流程

  + 切換到測試分支

    > $ git checkout qatest

  + 將本地端更新

    > $ git pull

  + 將分支合併至測試分支

    > $ git merge '分支名'

  + 推上 GitLab ( Google 不推 )

    > $ git push

  + 測試分支一般由 Nic 打包( build )，通知 Nic 協助打包，並註明要打包哪個專案

  + 於 skype 通知上各分支成功

    > ex: on onion dev qa done
