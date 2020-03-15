# 思路
要求没有 address 的时候也要查出 person 中的信息，所以此处用 leftjoin 即可
# 好简单，如果女朋友能这么简单就好了
```sql
select FirstName, LastName, City, State from Person a left join Address b on a.PersonId = b.PersonId
```
