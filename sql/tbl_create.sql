CREATE TABLE User
(
    username char(20),
    lastname char(20),
    password char(20),
    email char(40),
    PRIMARY KEY(username)
);


CREATE TABLE Album
(
    albumid integer,
    title char(50),
    created date,
    lastupdated date,
    username char(20),
    PRIMARY KEY (albumid),
    FOREIGN KEY (username) REFERENCES User(username)
);

CREATE TABLE Photo
(
    picid char(40),
    url char(255),
    format char(3),
    `date` date,
    PRIMARY KEY (picid)
);

CREATE TABLE Contain
(
    albumid integer,
    picid char(40),
    caption char(255),
    sequencenum integer,
    PRIMARY KEY(albumid, picid),
    FOREIGN KEY(albumid) REFERENCES Album(albumid),
    FOREIGN KEY(picid) REFERENCES Photo(picid)
);