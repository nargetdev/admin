INSERT INTO User (username,firstname,lastname, password, email) 
VALUES('sportslover','Paul','Walker', 'password','sportslover@hotmail.com');

INSERT INTO User (username,firstname,lastname, password, email) 
VALUES('traveler','Rebecca','Travolta', 'password','rebt@explorer.org');

INSERT INTO User (username,firstname,lastname, password, email) 
VALUES('spacejunkie','Bob','Spacey', 'password','bspace@spacejunkies.net');

INSERT INTO Album (albumid, title, created, lastupdated, username) 
VALUES(0,'I love sports','2014-09-14', '2014-09-14','sportslover');

INSERT INTO Album (albumid, title, created, lastupdated, username) 
VALUES(1,'I love football','2014-09-14', '2014-09-14','sportslover');

INSERT INTO Album (albumid, title, created, lastupdated, username) 
VALUES(2,'Around The World','2014-09-14', '2014-09-14','traveler');

INSERT INTO Album (albumid, title, created, lastupdated, username) 
VALUES(3,'Cool Space Shots','2014-09-14', '2014-09-14','spacejunkie');

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_EagleNebula', 'http://eecs485-05.eecs.umich.edu:5745/static/space_EagleNebula.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_GalaxyCollision', 'http://eecs485-05.eecs.umich.edu:5745/static/space_GalaxyCollision.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_HelixNebula', 'http://eecs485-05.eecs.umich.edu:5745/static/space_HelixNebula', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_MilkyWay', 'http://eecs485-05.eecs.umich.edu:5745/static/space_MilkyWay.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_OrionNebula', 'http://eecs485-05.eecs.umich.edu:5745/static/space_OrionNebula.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s1', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s1.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s2', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s2.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s3', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s3.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s4', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s4.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s5', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s5.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s6', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s6.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s7', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s7.jpg', 'jpg', '2012-5-1')

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s8', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s8.jpg', 'jpg', '2012-5-1')


-- CREATE TABLE Photo
-- (
--     picid char(40),
--     url char(255),
--     format char(3),
--     `date` date,
--     PRIMARY KEY (picid)
-- );

-- CREATE TABLE Contain
-- (
--     albumid integer,
--     picid char(40),
--     caption char(255),
--     sequencenum integer,
--     PRIMARY KEY(albumid, picid),
--     FOREIGN KEY(albumid) REFERENCES Album(albumid),
--     FOREIGN KEY(picid) REFERENCES Photo(picid)
-- );