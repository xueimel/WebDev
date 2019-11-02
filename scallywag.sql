Create Table users (
	fname varchar(25) Not Null,
    lname varchar(50) Not Null,
    email varchar(100) Not Null,
    phone varchar(16) Not Null,
    password varchar(25) Not Null,
    username varchar(25) Unique,
    Primary Key (username)
);

Create Table tickets (

)