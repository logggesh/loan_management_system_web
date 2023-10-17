use loandetails;


Create table loandetails(
loan int PRIMARY KEY auto_increment,
customername varchar(30),
phonenumber varchar(10),
address varchar(50),
landmark varchar(20),
vechiclename varchar(20),
modelyear int(4),
registrationnumber varchar(10),
guranteername varchar(30),
guranteernumber varchar(10),
guranteeradress varchar(50)
);
delete from loandetails;
delete from amountdetails;
drop table amountdetails;
delete from payment_details;
delete from loandetails where loan=80;
create table amountdetails(
loan INT,
Total_amount float,
Amount_pending float,
Amount_to_pay float,
Amount_per_month float,
Total_months int,
Dates date,
FOREIGN KEY(loan) REFERENCES loandetails(loan)
);

create table payment_details(
loan int,
amt_received_date date,
amt_received int,
foreign key(loan) references loandetails(loan));

select * from payment_details; 
drop table amountdetails;
select * from payment_details;
alter table amountdetails modify column loan int;
alter table payment_details add column amt_received int;
alter table amountdetails add column Amount_per_month float;
alter table amountdetails add column payemnt_status varchar(10) Default 'Not Paid';
select * from amountdetails;
select * from loandetails;
select * from amountdetails inner join payment_details on amountdetails.loan=payment_details.loan;
drop table loandetails;
insert into loandetails values(1,'logesh','9626855855','fsdh','fsdk','fdskj','2004','asdkj','fjh','dfk','sfkj');
insert into amountdetails values(1,'1000000','120211','10020220','12345','12','19-12-2012');
alter table payment_details modify column loan int;
alter table amountdetails add column numberofmonths int;


alter table payment_details add column balance_amount int;
select * from loandetails;
drop table payment_details;
select * from payment_details;
drop table loandetails;
insert into loandetails values(1,"logesh",9654125,"hgh","dhbfsh","sfjhgfsh",545,"sfhfsd","hddsh",5899,"daskhg",451,12);
select * from amountdetails;
delete from loandetails where loan='11';
delete from loandetails;
delete from payment_details;
update loandetails set numberofmonths = 10;
alter table amountdetails add column number_of_months int;
alter table amountdetails modify loan int primary key auto_increment;
delete from amountdetails;
select * from loandetails inner join payment_details on loandetails.loan=payment_details.loan; 