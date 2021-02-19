# Ubuntu 指令

- 清理快取
    + page cache
        $ echo 1 > /proc/sys/vm/drop_caches

    + dentries & inodes
        $ echo 2 > /proc/sys/vm/drop_caches

    + 1 + 2
        $ echo 3 > /proc/sys/vm/drop_caches