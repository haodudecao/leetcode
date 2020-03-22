```
select Score, 
(select count(Score1)+1 from 
    (select distinct Score as Score1 from Scores ) a  where Score1 > Score
) as Rank
from Scores order by score desc ;
```
