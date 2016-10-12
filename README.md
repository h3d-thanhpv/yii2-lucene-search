Yii2 Lucene Search
============================

Advanced search API and web interface [![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

# Installation

### 1. Database config

Create account and database in localhost mysql server, then change config in `config/db.php`
```
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2lucene',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
];
```

### 2. Run migration

Open terminal and run this command on root app folder
 
```
yii migrate
```

### 3. Indexing and Optimizing query data

```
yii search/index

yii search/optimize
```

# Usage

Go to homepage and test with some query like that:
```
CREATE_DATE:[20160501 TO 20170101]

USER_NAME=dclark

USER_NAME=dclark and FIRST_NAME=Donna

USER_NAME=dclark and USER_AGENT=Chrome

USER_NAME:D*a AND GENDER:Male

USER_NAME:D*a AND COMPANY:Y*
```

# Reference
[https://framework.zend.com/manual/1.12/en/zend.search.lucene.html](https://framework.zend.com/manual/1.12/en/zend.search.lucene.html)

[https://github.com/himiklab/yii2-search-component-v2](https://github.com/himiklab/yii2-search-component-v2)
