# 旧PHP扩展包装器

很多常用的PHP扩展已经在PHP中被废弃或彻底删除了，比如 mysql_* 系列函数，ereg* 系列函数，这意味着旧的PHP程序无法在PHP7中运行。

于是我写了这些库用于解决这个问题，它们通过 php.net 官方手册建议的新函数来实现了旧函数的接口，所以只要在老的PHP程序中载入它们，老PHP程序就可以正常运行了。

本项目处于公共领域，分发和使用不受限制。
