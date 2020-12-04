# Sql程式碼

## 資料匯入/匯出

### 匯出

- 匯出整個資料庫
	$ mysqldump -u (UserName) -p (dbName) > dbName.sql

- 匯出資料庫結構(不含資料)
	$ mysqldump -u (UserName) -p -d (dbName) > dbName.sql

- 匯出資料庫中指定的資料表
	$ mysqldump -u (UserName) -p (dbName) (tableName) > tableName.sql

- 匯出資料庫中指定資料表的的結構(不含資料)
	$ mysqldump -u (UserName) -p -d (dbName) (tableName) > tableName.sql

### 匯入

- 匯入資料庫
	$ mysql -u (username) -p (dbname) < back_up.sql

- 進入到資料庫直接執行
	mysql> back_up.sql

## 資料庫 Database
```sql

-- 建立資料庫
CREATE DATABASE `database name`;

-- 建立資料庫並指定編碼格式
CREATE DATABASE `database name` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

```

## 資料表 Table