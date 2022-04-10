CREATE TABLE USERS(
	id int AUTO_INCREMENT NOT null,
    username varchar(20) not null UNIQUE,
    password varchar(50) not null,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    birthDate int not null,
    birthMonth int not null,
    birthYear int not null,
    phone int not null,
    email varchar(50) not null,
    type varchar(20) not null,
    salary int not null,
    accountStatus varchar(20) not null,
    photoName varchar(50) not null,
    PRIMARY KEY(id)
);

CREATE TABLE auctions(
	id int AUTO_INCREMENT NOT NULL,
    seller_id int NOT NULL,
    title varchar(50) NOT NULL,
    description TEXT NOT NULL,
    init_price int NOT NULL,
    cur_price int,
    sold_to int,
    status varchar(20) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(seller_id) REFERENCES users(id)
);

CREATE Table Bids(
    id int AUTO_INCREMENT,
    prop_id int not null,
    bid int not null,
    bidder_id int not null,
    PRIMARY KEY(id),
    FOREIGN Key(prop_id) REFERENCES auctions(id) ON DELETE CASCADE,
    FOREIGN Key(bidder_id) REFERENCES users(id) ON DELETE CASCADE
);