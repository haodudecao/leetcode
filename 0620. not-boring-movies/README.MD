
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
