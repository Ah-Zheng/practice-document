# Git Ftp

- url: ftp://ftp.ah-zheng.com
- account: ah-zheng.ml@ah-zheng.ml
	lkmwtzyn
- password: ah-zheng.ml
	C)tE50:a2qJ6rU

## 基本指令

- 初始化
	$ git ftp init [options] -u (account) -p (password) (url)

	[options]
		-u: 帳號
		-p: 密碼
		-D: 不做 upload 及 delete 動作，僅檢查 .git-ftp.log

- 設定 ftp config

	+ 伺服器路由
		$ git config git-ftp.url (url)

	+ 帳號
		$ git config git-ftp.user (account)

	+ 密碼
		$ git config git-ftp.password (password)

	+ 指定本地端要上傳的資料夾
		$ git config git-ftp.syncroot (資料夾路徑)

- 推送
	$ git ftp push

- 設定 scope ftp config
	$ git config git-ftp[.scope].url (url)

	+ 範例：
		$ git config git-ftp.develop.url (url)

	+ config 檔內會有如下資訊

		[git-ftp “develop”]
		user = dev
		password = 1234
		syncroot = ./dowob/assets
		url = ftp://127.0.0.1/project/dowob

- 依 scope 推送
	$ git ftp push -s (scope)

- 依 scope 初始化
	$ git ftp init -s (scope)