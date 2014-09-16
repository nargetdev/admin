CREATE TABLE User
(
    username varchar(20),
    firstname varchar(20),
    lastname varchar(20),
    password varchar(20),
    email varchar(40),
    PRIMARY KEY(username)
);

CREATE TABLE Album
(
    albumid integer,
    title varchar(50),
    created date,
    lastupdated date,
    username varchar(20),
    PRIMARY KEY (albumid),
    FOREIGN KEY (username) REFERENCES User(username)
);

CREATE TABLE Photo
(
    picid varchar(40),
    url varchar(255),
    format char(3),
    `date` date,
    PRIMARY KEY (picid)
);

CREATE TABLE Contain
(
    albumid integer,
    picid varchar(40),
    caption varchar(255),
    sequencenum integer,
    PRIMARY KEY(albumid, picid),
    FOREIGN KEY(albumid) REFERENCES Album(albumid) ON DELETE CASCADE,
    FOREIGN KEY(picid) REFERENCES Photo(picid)
    -- need a way to delete contains entry if ablum is deleted
);
