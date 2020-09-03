## READ THIS FOR CLARITY
youtube link: https://youtu.be/qwG_dD5MtbA (to see the working of the web app)
#### DIRECTORIES:
1. root -> contains the presentation files. 
2. php -> contains logical php code
3. others -> css, js, fonts etc. Bootstrap related content -> can be pushed via CDN too to make server faster.

#### FILES:
1. login.php -> login page for both users and consumers
2. register.php -> Registration page for users only
3. vendor_register.php -> Registration page for consumers only
4. index.html -> Landing page for the webapp
5. php/dbconnect.php -> creates a database connection. Database parameters are set in this file. The caller must close the db connection.
6. php/handle_login.php -> handles login for consumer
7. php/handle_vendor_login.php -> handles login for vendor
8. php/message.php -> prints a cleanly formatted error or success message above the site content
9. php/login_redirect.php -> redirects the user to home page if they are already logged in. (inclusion pending)
10. home.php -> (Bare bones is implemented by varshith for testing) user home page to be implemented by Harsh Pritam.

#### NOTE:
session_start() must be called at the top of every page for the page to be able to access $_SESSION Variables.

#### TABLES:
create table consumers(
username 		 varchar(10) ,
password		 varchar(10),
email			 varchar(10) UNIQUE,
firstname		 varchar(10),

lastname		 varchar(10),
primary key (username)
);
---------------------------------------------------
create table phone_no(
consumer_id 	int,
phone_number	numeric(10,0),
primary key (consumer_id,phone_number)
);
----------------------------------------------------
create table medicine(
dosage				int,
date_of_manuf		varchar(20),
commercial_name 	varchar(20),
max_retail_price	int,
batch_no			int,
primary key (commercial_name)
);
##################################
create table symptoms(
commercial_name   varchar(10),
symptom 		  varchar(10),
primary key (commercial_name)
);
##################################
create table side_effects(
commercial_name 	varchar(10),
side_effect 		varchar(10),
primary key (commercial_name)
);
##################################
create table compounds(
commercial_name 	varchar(10),
compound			varchar(10),
primary key (commercial_name)
);
---------------------------------------------------
create table admin(
admin_username		varchar(10),
passkey				varchar(10),
primary Key (admin_username)
);
#############################
create table log_history(
admin_username   varchar(10),
user_id			 varchar(10),
time			 varchar(10)
);
-----------------------------------------------------
create table pharmaceutical_company(
company_name		varchar(10) UNIQUE,
company_id			varchar(10),
rating				int,
commercial_name     varchar(10),
primary key (company_id,commercial_name)
);
-------------------------------------------------------
create table vendors(
email   		varchar(10) UNIQUE,
password		varchar(10),
address			varchar(10),

username		varchar(10) UNIQUE,
vendor_id		varchar(10),
primary key (vendor_id)
);
--------------------------------------------------------
create table purchase(
order_id		int,
username 	varchar(20),
commercial_name	varchar(20),
discount		int,
date 			varchar(20),
quantity		int,

primary key (username,commercial_name),
foreign key (username) references consumers(username),
foreign key (commercial_name) references medicine(commercial_name)
);
-----------------------------------------------------------

-------------------------------------------------------------
create table supplies(
company_id 		varchar(10),
vendor_id		varchar(10),
date_of_supply	varchar(10),
primary key (company_id,vendor_id),
foreign key (company_id) references pharmaceutical_company,
foreign key (vendor_id) references vendors
);
-------------------------------------------------------------
create table produces(
commercial_name		varchar(10),
company_id			varchar(10),
primary key (commercial_name),
foreign key (commercial_name) references medicine,
foreign key (company_id	) references pharmaceutical_company
);
---------------------------------------------------------------------
create table inventory(
inventory_id int,
commercial_name varchar(20),
vendor_username int,
quantity int,
date_of_supply  date,
expiry_date date

foreign key (commercial_name) references medicine

);
