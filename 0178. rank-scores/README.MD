# 思路
分数排序很简单，重要的是确认名次，且及时前方有重复名词，所有名词应为连续整数。
查出所有不重复的分数
```
select distinct Score as Score1 from Scores
```
算出比当前分数大的分数的个数作为 rand，即可完成

```sql
select Score, 
(select count(Score1)+1 from 
    (select distinct Score as Score1 from Scores ) a  where Score1 > Score
) as Rank
from Scores order by score desc ;
```
