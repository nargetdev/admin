INSERT INTO User (username,firstname,lastname, password, email) 
VALUES('sportslover','Paul','Walker', 'password','sportslover@hotmail.com');

INSERT INTO User (username,firstname,lastname, password, email) 
VALUES('traveler','Rebecca','Travolta', 'password','rebt@explorer.org');

INSERT INTO User (username,firstname,lastname, password, email) 
VALUES('spacejunkie','Bob','Spacey', 'password','bspace@spacejunkies.net');

INSERT INTO Album (title, created, lastupdated, username) 
VALUES('I love sports','2014-09-14', '2014-09-14','sportslover');

INSERT INTO Album (title, created, lastupdated, username) 
VALUES('I love football','2014-09-14', '2014-09-14','sportslover');

INSERT INTO Album (title, created, lastupdated, username) 
VALUES('Around The World','2014-09-14', '2014-09-14','traveler');

INSERT INTO Album (title, created, lastupdated, username) 
VALUES('Cool Space Shots','2014-09-14', '2014-09-14','spacejunkie');



INSERT INTO Photo (picid, url, format, date) 
VALUES('football_s1','http://eecs485-05.eecs.umich.edu:5745/static/football_s1.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('football_s2','http://eecs485-05.eecs.umich.edu:5745/static/football_s2.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('football_s3','http://eecs485-05.eecs.umich.edu:5745/static/football_s3.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('football_s4','http://eecs485-05.eecs.umich.edu:5745/static/football_s4.jpg','jpg','2012-01-05');

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(2,'football_s1', 'caption', 1);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(2,'football_s2', 'caption', 2);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(2,'football_s3', 'caption', 3);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(2,'football_s4', 'caption', 4);



INSERT INTO Photo (picid, url, format, date) 
VALUES('world_EiffelTower','http://eecs485-05.eecs.umich.edu:5745/static/world_EiffelTower.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_firenze','http://eecs485-05.eecs.umich.edu:5745/static/world_firenze.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_GreatWall','http://eecs485-05.eecs.umich.edu:5745/static/world_GreatWall.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_Isfahan','http://eecs485-05.eecs.umich.edu:5745/static/world_Isfahan.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_Istanbul','http://eecs485-05.eecs.umich.edu:5745/static/world_Istanbul.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_Persepolis','http://eecs485-05.eecs.umich.edu:5745/static/world_Persepolis.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_Reykjavik','http://eecs485-05.eecs.umich.edu:5745/static/world_Reykjavik.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_Seoul','http://eecs485-05.eecs.umich.edu:5745/static/world_Seoul.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_Stonehenge','http://eecs485-05.eecs.umich.edu:5745/static/world_Isfahan.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_TajMahal','http://eecs485-05.eecs.umich.edu:5745/static/world_TajMahal.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_TelAviv','http://eecs485-05.eecs.umich.edu:5745/static/world_TelAviv.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_tokyo','http://eecs485-05.eecs.umich.edu:5745/static/world_tokyo.jpg','jpg','2012-01-05');

INSERT INTO Photo (picid, url, format, date) 
VALUES('world_WashingtonDC','http://eecs485-05.eecs.umich.edu:5745/static/world_WashingtonDC.jpg','jpg','2012-01-05');

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_EiffelTower', 'caption', 1);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_firenze', 'caption', 2);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_GreatWall', 'caption', 3);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_Isfahan', 'caption', 4);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_Istanbul', 'caption', 5);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_Persepolis', 'caption', 6);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_Reykjavik', 'caption', 7);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_Seoul', 'caption', 8);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_Stonehenge', 'caption', 9);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_TajMahal', 'caption', 10);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_TelAviv', 'caption', 11);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_tokyo', 'caption', 12);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES(3,'world_WashingtonDC', 'caption', 13);




INSERT INTO Photo (picid, url, format, date)
VALUES ('space_EagleNebula', 'http://eecs485-05.eecs.umich.edu:5745/static/space_EagleNebula.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_GalaxyCollision', 'http://eecs485-05.eecs.umich.edu:5745/static/space_GalaxyCollision.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_HelixNebula', 'http://eecs485-05.eecs.umich.edu:5745/static/space_HelixNebula', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_MilkyWay', 'http://eecs485-05.eecs.umich.edu:5745/static/space_MilkyWay.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('space_OrionNebula', 'http://eecs485-05.eecs.umich.edu:5745/static/space_OrionNebula.jpg', 'jpg', '2012-5-1');

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 'space_EagleNebula', 'caption', 1);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 'space_GalaxyCollision', 'caption', 2);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 'space_HelixNebula', 'caption', 3);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 'space_MilkyWay', 'caption', 4);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 'space_OrionNebula', 'caption', 5);



INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s1', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s1.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s2', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s2.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s3', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s3.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s4', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s4.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s5', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s5.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s6', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s6.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s7', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s7.jpg', 'jpg', '2012-5-1');

INSERT INTO Photo (picid, url, format, date)
VALUES ('sports_s8', 'http://eecs485-05.eecs.umich.edu:5745/static/sports_s8.jpg', 'jpg', '2012-5-1');

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s1', 'caption', 1);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s2', 'caption', 2);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s3', 'caption', 3);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s4', 'caption', 4);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s5', 'caption', 5);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s6', 'caption', 6);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s7', 'caption', 7);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 'sports_s8', 'caption', 8);
