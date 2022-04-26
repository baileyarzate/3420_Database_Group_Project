 DROP VIEW IF EXISTS `view_1`;
 DROP VIEW IF EXISTS `view_2`;
 DROP VIEW IF EXISTS `view_3`;


-- retrieves all sleep sessions that started before 9pm
--  VIEW 1
create view view_1 as
select date(startdatetime) as eligibledates 
from log  
where isoverallstart = 1 
and time(startdatetime) <= "21:00:00" 
order by date(startdatetime);


-- retrieves all logs that happened between 2022-03-22 and 2022-04-22
 -- View 2
create view view_2 as
select distinct client.* from log natural join client 
where startdatetime <= "2022-04-22" and enddatetime >= "2022-03-22";


-- retrieves regular users that have shared access to log 3.
-- View 3
create view view_3 as
select premiumbuddieswithothers.username, client.password 
from log inner join premiumbuddieswithothers natural join client
on log.username = premiumbuddieswithothers.premusername 
where logid = 3;
