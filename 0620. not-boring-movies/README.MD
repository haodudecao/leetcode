
简单的小题
```
select * from cinema where description <> 'boring' and id % 2 = 1 order by rating desc;
select * from cinema where description <> 'boring' and mod(10,2)=1 order by rating desc; 


```

除了用取余来判断奇数，还可以用位操作
```
select *from cinema
where id & 1 
and description <> 'boring'order by rating DESC;
```
mysql 的 and 和 or 还可以写成 && 和 || ，怎么没有印象，可能当年看基础的时候见过，但是后来一直没用就忘记了。。。
```
select * from table where sex = 1 && name = ‘张三’;
select * from table where name = '李四' || name = ‘张三’;


```
