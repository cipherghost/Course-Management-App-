# Setup guidelines

Make sure you have installed all the technologies specified in [README.md](https://github.com/poojayadav12/Endgem/README.md).

## Database
Run the following commands to set up the database and create necessary tables
```sql
$ mysql -u test -p

> CREATE DATABASE endgem;
> USE endgem;
> CREATE TABLE `course1` (
    `id` INT AUTO_INCREMENT,
    `dname` VARCHAR(150),
    `date` DATE,
    `nod` INT(11) DEFAULT '0',
     PRIMARY KEY(id)
);
```
Similarly, create tables course2, course3 and course4.
## Project setup
### Linux users:
```bash
  $ sudo su
  $ cd  /var/www/html/
  $ git clone https://github.com/poojayadav12/Endgem.git Endgem
  $ service apache2 start
  $ sudo chmod 777 /var/www/html/Endgem/upload
```

#### Visit [http://localhost/Endgem/course1.php](http://localhost/Endgem/course1.php) .
