create database cricket;
use cricket;
CREATE TABLE cricket_organization(
  org_name varchar(255) NOT NULL primary key,
  country varchar(255) 
);
 

CREATE TABLE owner_team(
  ownerID int(255) NOT NULL primary key,
  owner_name varchar(255),
  team_name varchar(255) 
) ;

CREATE TABLE stadium (
  stadium_name varchar(255) NOT NULL primary key,
  pitch_type varchar(255),
  location varchar(255) 
) ;

CREATE TABLE scheduled_match(
   matchID int(255) auto_increment not NULL primary key,
   no_of_tickets int(255),
   team1_name varchar(255),
   team2_name varchar(255),
   match_date date,
   stadium_name varchar(255) ,
   Foreign Key(stadium_name) references stadium(stadium_name)
);

CREATE TABLE users(
  username varchar(255) NOT NULL primary key,  
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
);
CREATE TABLE ticket(
  ticket_id int(255) auto_increment not NULL primary key,
  username varchar(255),
  matchID int(255) ,
  Foreign Key(matchID) references scheduled_match(matchID),
  Foreign Key(username) references users(username)
);

CREATE TABLE team (
  team_name varchar(255) NOT NULL primary key,
  org_name varchar(255) ,
  ownerID int(255) ,
  matchID int(255) ,
  Foreign Key(ownerID) references owner_team(ownerID),
  Foreign Key(matchID) references scheduled_match(matchID),
  Foreign Key(org_name) references cricket_organization(org_name)
);


CREATE TABLE coach(
  coachID int(255) auto_increment not NULL primary key,
   team_name varchar(255),
  coach_name varchar(255),
  coach_age int(255),
  Foreign Key(team_name) references team(team_name)
);




CREATE TABLE ambassador (
  ambID int(255) auto_increment not null primary key,
  team_name varchar(255),
  amb_name varchar(255),
  Foreign Key(team_name) references team(team_name)
);


CREATE TABLE sponsor (
  sponsorID int(255) auto_increment not NULL primary key,
   team_name varchar(255),
  sponsor_name varchar(255),
    Foreign Key(team_name) references team(team_name)
) ;




CREATE TABLE player (
  playerID int(255) auto_increment not NULL primary key,
  team_name varchar(255),
  player_name varchar(255),
  player_type varchar(255),
  player_age int(255),
  player_nationality varchar(255),
  joindate date ,
  experience int(255) , 
  # player record
  avg_score int(255),
  economy int(255),
  wickets_taken int(255),
  matches_played int(255),
  centuries int(255),
  fifties int(255),
  Foreign Key(team_name) references team(team_name)
);


CREATE TABLE commentator (
  commID int(255) auto_increment not NULL primary key,
  matchID int(255),
  comm_name varchar(255),
   country varchar(255),
  Foreign Key(matchID) references scheduled_match(matchID)
) ;


insert into commentator(matchID, comm_name, country)
values (NULL, 'Waseem Akram', 'Pakistan'),
(NULL, 'Ramiz Raja','Pakistan'),
(NULL, 'Simmon Doull', 'New Zealand'),
(NULL, 'Michael Holding','West Indies'),
(NULL, 'Mark Nicholas','England'),
(NULL, 'Michael Slater', 'Austrailia');

CREATE TABLE umpire(
  umpireID int(255) auto_increment NOT NULL primary key,
   matchID int(255),
  umpire_name varchar(255),
  experience int(255),
  Foreign Key(matchID) references scheduled_match(matchID)
);

#----------------OWNERS
insert into owner_team(ownerID, owner_name, team_name)
values (1, 'Usman Gill' , 'Pakistan'),
       (2, 'Hamza Fareed' , 'India'), 
	   (3, 'Sufian Saeed' , 'England'), 
       (4, 'Waleed Lodhi' , 'Austrailia'),
	   (5, 'Ahsan AbdurRehman' , 'West Indies'),
	   (6, 'Mateen Ahmed' , 'Sri Lanka'),
	   (7, 'Umair Ahmed' , 'New Zealand'),
	   (8, 'Ghulam Mustafa' , 'Bangladesh'),
	   (9, 'Salaar Khan' , 'Zimbabwe'),
       (10, 'Iqra Sadiq' , 'South Africa');
 
 # STADIUMS-----------------------
insert into stadium(stadium_name, pitch_type, location)
values ('Gadaffi', NULL , 'Lahore'),('Multan Stadium', NULL , 'Multan') ;

# ICC, PSL , IPL
insert into cricket_organization(org_name, country)
values ('ICC', 'England');

# MATCHES
insert into scheduled_match(team1_name, team2_name,  match_date, stadium_name,no_of_tickets)
values ('Pakistan','India','2020-10-10', 'Gadaffi', 100) ,
       ('Austrailia','England','2020-10-12', 'Multan Stadium', 100),
		('Austrailia','Pakistan','2020-10-12', 'Multan Stadium', 100),
	   ('India','England','2020-10-12', 'Multan Stadium', 100);

#---------------------ALL TEAMS
insert into team(team_name, org_name, ownerID, matchID)
values ('Pakistan', 'ICC', 1 , 1),
       ('India', 'ICC', 2 , 1),
	   ('England', 'ICC', 3 , 2),
       ('Austrailia', 'ICC', 4 , 2),
	   ('West Indies', 'ICC', 5 , NULL),
	   ('Sri Lanka', 'ICC', 6 , NULL),
	   ('New Zealand', 'ICC', 7 , NULL),
	   ('Bangladesh', 'ICC', 8 , NULL),
	   ('Zimbabwe', 'ICC', 9 , NULL),
	   ('South Africa', 'ICC', 10 , NULL);
       
      

 # COACHES
insert into coach(team_name, coach_name ,coach_age)
values ('Pakistan', 'Misbah Ul Haq' , 47 ),
	('England', 'Chris Silverwood', 46 ), 
	('Austrailia', 'Justin Langar', 50 ), 
	('Sri Lanka', 'Mickey Arthur', 53),
	('India', 'Ravi Shastri',59 ),
	('West Indies', 'Phil Simmons',58),
	('Bangladesh', 'Russell Domingo',46),
	('New Zealand', 'Gary Stead',49),
	('Zimbabwe', 'LalChand Rajput' ,59),
	('South Africa', 'Mark Boucher' ,44);
            
 # umpires      
insert into umpire(matchID, umpire_name, experience)
values (1, 'Steve Buknor' , 20),
       (1, 'Dicky Bird' , 23), 
	   (1, 'David Shepherd' , 12),
	   (1, 'Simon Toffel' , 12),
	   (1, 'Aleem Dar' , 21),
	   (1, 'Billy Bowdan' , 21),
	   (1, 'Daryl Harper' , 25),
	   (1, 'Rudi koertzen' , 28),
	   (1, 'Darrel Hair' , 27),
		(1, 'Tony Hill' , 15);
#sponsors
insert into sponsor(team_name, sponsor_name)
values  ('Pakistan', 'Jubilee'),('Pakistan', 'HBL'),
        ('Austrailia', 'kiwi'),('Austrailia', 'Pepsi'),
		('India', 'Tata Motors'),('India', 'Byju'),
		('West Indies', 'Sandals Resort'),('West Indies', 'Digicell'),
		('Sri Lanka', 'Dialog'),('Sri Lanka', 'Daraz'),
		('South Africa', 'Tata Motors'),('South Africa', 'Byju'),
		('Zimbabwe', 'Toyota'),('Zimbabwe', 'Nike'),
		('New Zealand', 'Coca Cola'),('New Zealand', 'Cinch'),
		('Bangladesh', 'Lifeboy'),('Bangladesh', 'Evaly'),                
		('England', 'Adidas'),('England', 'ECB');

# Ambassador
insert into ambassador(team_name, amb_name)
values  ('Pakistan', 'Mahira Khan'),('Pakistan', 'Hania Amir'),
        ('Austrailia', 'Alex James'),('Austrailia', 'Lily Adam'),
		('India', 'Patel Ashwani'),('India', 'Rahul Kumar'),
		('West Indies', 'Gayle Sammy'),('West Indies', 'Chris Brandon'),
		('Sri Lanka', 'Mandes Kumar'),('Sri Lanka', 'Alston Koch'),
		('South Africa', 'Dale Willem Steyn'),('South Africa', 'Jonathan Neil Rhodes '),
		('Zimbabwe', 'Sammy Troy'),('Zimbabwe', 'Blessing Prince'),
		('New Zealand', 'Noah Kane'),('New Zealand', 'William James'),
		('Bangladesh', 'Shakib Hussain'),('Bangladesh', 'Mushfiq Abbas'),                
		('England', 'Ross Cook'),('England', 'Stuart Broad');



# PAKISTAN TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('Pakistan','Babar Azam','Batsman', 26, 'Pakistan', '2016-01-01', 5 ,100 , NULL, NULL, 100, 100, 100) ,
       ('Pakistan','Fakhar Zaman','Batsman', 26, 'Pakistan', '2016-01-01', 5 , 100 , NULL, NULL, 100, 100, 100) ,
       ('Pakistan','Mohammad Amir','Bowler', 26, 'Pakistan', '2016-01-01', 5, 12 , 10, 100 , 100, 0 , 0),
       ('Pakistan','Shoaib Malik','All Rounder', 26, 'Pakistan', '2016-01-01', 5, 100 , 10, 100 , 100, 100, 100) ,
       ('Pakistan','Shadab Khan','All Rounder', 26 , 'Pakistan', '2016-01-01', 5 , 100 , 10, 100 , 100, 100, 100) ,
       ('Pakistan','Mohammad Hafiz','All Rounder', 26, 'Pakistan', '2016-01-01', 5, 100 , 10, 100 , 100, 100, 100) ,
       ('Pakistan','Sarfraz Ahmed ','Wicket Keeper', 26, 'Pakistan', '2016-01-01',5, 100 , NULL, NULL, 100, 100, 100) ,
       ('Pakistan','Shaheed Afridi','Bowler',  26 , 'Pakistan', '2016-01-01', 5, 12 , 10, 100 , 100, 0 , 0),
       ('Pakistan','Wahab Riaz','Bowler',      26 , 'Pakistan', '2016-01-01', 5, 12 , 10, 100 , 100, 0 , 0) ,
       ('Pakistan','Imad Wasim','All Rounder', 26 , 'Pakistan', '2016-01-01', 5, 100 , 10, 100 , 100, 100, 100) ,
       ('Pakistan','Imam-ul-Haq','Batsman',    26, 'Pakistan', '2016-01-01', 5,100 , NULL, NULL, 100, 100, 100);


# INDIA TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('India','Virat Kohli','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('India','M Dhoni','Wicket Keeper', 30, 'India', '2000-01-11', 21, 178, NULL, NULL, 768, 40, 98),
	   ('India','Shikhar Dhawan','Batsman', 35, 'India', '2013-03-11', 21, 76, NULL, NULL, 351, 21, 44),
	   ('India','Rohit Gurunath Sharma','Batsman', 34, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123),
	   ('India','Ishant Sharma','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123),
	   ('India','Ravichandran Ashwin','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123),
	   ('India','Ajinkya Rahane','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123),
	   ('India','Bhuvneshwar Kumar','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123),
	   ('India','Jasprit Bumrah','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123),
	   ('India','Hardik Pandya','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123),
	   ('India','Ajinkya Rahane','Batsman', 28, 'India', '2000-03-11', 21, 156, NULL, NULL, 1204, 43, 123);

# ENGLAND TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('England','Moeen Ali','All Rounder', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Jonny Bairstow','Wicket Keeper', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Tom Curran','Bowler', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Eoin Morgan','Batsman', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Liam Plunkett','Bowler', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Joe Root','Batsman', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Ben Stokes','All Rounder', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','CHris Woakes','All Rounder', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Jofra Archer','Bowler', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Liam Dawson','Bowler', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123),
	   ('England','Jason Roy','Batsman', 28, 'England', '2000-03-11', 21, 156, NULL, NULL, 656, 43, 123);
       
# AUSTRAILIA TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('Austrailia','Aaron Finch','Batsman', 32, 'Austrailia', '2000-01-11', 21, 156, NULL, NULL, 742, 66, 115),
       ('Austrailia','Usman Khawaja','Batsman', 28, 'Austrailia', '2003-03-18', 18, 156, NULL, NULL, 635, 55, 96),
       ('Austrailia','Shaun Marsh','Batsman', 26, 'Austrailia', '2006-08-09', 15, 156, NULL, NULL, 854, 85, 158),
       ('Austrailia','David Warner','Batsman', 32, 'Austrailia', '2004-06-04', 17, 156, NULL, NULL, 445, 45, 91),
       ('Austrailia','Jason Behrendorff','Bowler', 33, 'Austrailia', '2009-09-23', 12, 156, 12, 358, 897, 2, 35),
       ('Austrailia','Mitchell Starc','Bowler', 30, 'Austrailia', '2000-04-22', 21, 156, 8, 354, 756, 5, 42),
       ('Austrailia','Pat Cummins','Bowler', 29, 'Austrailia', '2000-06-21', 21, 156, 9, 154, 566, 21, 78),
       ('Austrailia','Nathan Lyon','Bowler', 28, 'Austrailia', '2003-06-15', 18, 156, 10, 245, 854, 0, 9),
       ('Austrailia','Glenn Maxwell','All Rounder', 27, 'Austrailia', '2005-08-07', 16, 156, 11, 344, 845, 36, 87),
       ('Austrailia','Marcus Stoinis','All Rounder', 27, 'Austrailia', '2003-06-08', 18, 156, 5, 444, 921, 35, 98),
       ('Austrailia','Alex Carey','Wicket Keeper', 30, 'Austrailia', '2000-07-5', 21, 156, NULL, NULL, 896, 45, 153);
       
# WEST INDIES TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('West Indies','Chris Gayle','Batsman', 32, 'West Indies', '2000-01-11', 21, 156, NULL, NULL, 742, 66, 115),
       ('West Indies','Pollard','Batsman', 28, 'West Indies', '2003-03-18', 18, 156, NULL, NULL, 635, 55, 96),
       ('West Indies','Sunil Ambris','Batsman', 26, 'West Indies', '2006-08-09', 15, 156, NULL, NULL, 854, 85, 158),
       ('West Indies','Darren Bravo','Batsman', 32, 'West Indies', '2004-06-04', 17, 156, NULL, NULL, 445, 45, 91),
       ('West Indies','Ashley Nurse','Bowler', 33, 'West Indies', '2009-09-23', 12, 156, 12, 358, 897, 2, 35),
       ('West Indies','Kemar Roach','Bowler', 30, 'West Indies', '2000-04-22', 21, 156, 8, 354, 756, 5, 42),
       ('West Indies','Oshane Thomas','Bowler', 29, 'West Indies', '2000-06-21', 21, 156, 9, 154, 566, 21, 78),
       ('West Indies','Shannon Gabriel','Bowler', 28, 'West Indies', '2003-06-15', 18, 156, 10, 245, 854, 0, 9),
       ('West Indies','Jason Holder','All Rounder', 27, 'West Indies', '2005-08-07', 16, 156, 11, 344, 845, 36, 87),
       ('West Indies','Fabian Allen','All Rounder', 27, 'West Indies', '2003-06-08', 18, 156, 5, 444, 921, 35, 98),
       ('West Indies','Nicholas Pooran','Wicket Keeper', 30, 'West Indies', '2000-07-5', 21, 156, NULL, NULL, 896, 45, 153);

# SRI LANKA TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('Sri Lanka','Dimuth Karunaratne','Batsman', 32, 'Sri Lanka', '2000-01-11', 21, 156, NULL, NULL, 742, 66, 115),
       ('Sri Lanka','AVishka Fernando','Batsman', 28, 'Sri Lanka', '2003-03-18', 18, 156, NULL, NULL, 635, 55, 96),
       ('Sri Lanka','Kusal Mendis','Batsman', 26, 'Sri Lanka', '2006-08-09', 15, 156, NULL, NULL, 854, 85, 158),
       ('Sri Lanka','Lahiru Thrimanne','Batsman', 32, 'Sri Lanka', '2004-06-04', 17, 156, NULL, NULL, 445, 45, 91),
       ('Sri Lanka','Lasith Malinga','Bowler', 33, 'Sri Lanka', '2009-09-23', 12, 156, 12, 358, 897, 2, 35),
       ('Sri Lanka','Kasun Rajitha','Bowler', 30, 'Sri Lanka', '2000-04-22', 21, 156, 8, 354, 756, 5, 42),
       ('Sri Lanka','Nuwan Pradeep','Bowler', 29, 'Sri Lanka', '2000-06-21', 21, 156, 9, 154, 566, 21, 78),
       ('Sri Lanka','Suranga Lakmal','Bowler', 28, 'Sri Lanka', '2003-06-15', 18, 156, 10, 245, 854, 0, 9),
       ('Sri Lanka','Angelo Mathews','All Rounder', 27, 'Sri Lanka', '2005-08-07', 16, 156, 11, 344, 845, 36, 87),
       ('Sri Lanka','Thisara Perera','All Rounder', 27, 'Sri Lanka', '2003-06-08', 18, 156, 5, 444, 921, 35, 98),
       ('Sri Lanka','Kumar Sangakara','Wicket Keeper', 30, 'Sri Lanka', '2000-07-5', 21, 156, NULL, NULL, 896, 45, 153);
       
# NEW ZEALAND TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('New Zealand','Kane Williamson','Batsman', 32, 'New Zealand', '2000-01-11', 21, 156, NULL, NULL, 742, 66, 115),
       ('New Zealand','Tom Blundell','Batsman', 28, 'New Zealand', '2003-03-18', 18, 156, NULL, NULL, 635, 55, 96),
       ('New Zealand','Martin Guptill','Batsman', 26, 'New Zealand', '2006-08-09', 15, 156, NULL, NULL, 854, 85, 158),
       ('New Zealand','Ross Taylor','Batsman', 32, 'New Zealand', '2004-06-04', 17, 156, NULL, NULL, 445, 45, 91),
       ('New Zealand','Tim Southee','Bowler', 33, 'New Zealand', '2009-09-23', 12, 156, 12, 358, 897, 2, 35),
       ('New Zealand','Trent Boult','Bowler', 30, 'New Zealand', '2000-04-22', 21, 156, 8, 354, 756, 5, 42),
       ('New Zealand','Matt Henry','Bowler', 29, 'New Zealand', '2000-06-21', 21, 156, 9, 154, 566, 21, 78),
       ('New Zealand','Ish Sodhi','Bowler', 28, 'New Zealand', '2003-06-15', 18, 156, 10, 245, 854, 0, 9),
       ('New Zealand','Jimmy Neesham','All Rounder', 27, 'New Zealand', '2005-08-07', 16, 156, 11, 344, 845, 36, 87),
       ('New Zealand','Mitchell Santner','All Rounder', 27, 'New Zealand', '2003-06-08', 18, 156, 5, 444, 921, 35, 98),
       ('New Zealand','BJ Watling','Wicket Keeper', 30, 'New Zealand', '2000-07-5', 21, 156, NULL, NULL, 896, 45, 153);
       
# BANGLADESH TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('Bangladesh','Mosaddek Hossain','Batsman', 32, 'Bangladesh', '2000-01-11', 21, 156, NULL, NULL, 742, 66, 115),
       ('Bangladesh','Soumya Sarkar','Batsman', 28, 'Bangladesh', '2003-03-18', 18, 156, NULL, NULL, 635, 55, 96),
       ('Bangladesh','Tamim Iqbal','Batsman', 26, 'Bangladesh', '2006-08-09', 15, 156, NULL, NULL, 854, 85, 158),
       ('Bangladesh','Mushfiqur Rahim','Batsman', 32, 'Bangladesh', '2004-06-04', 17, 156, NULL, NULL, 445, 45, 91),
       ('Bangladesh','Nashrafe Mortaza','Bowler', 33, 'Bangladesh', '2009-09-23', 12, 156, 12, 358, 897, 2, 35),
       ('Bangladesh','Abu Jayed','Bowler', 30, 'Bangladesh', '2000-04-22', 21, 156, 8, 354, 756, 5, 42),
       ('Bangladesh','Rubel Hossain','Bowler', 29, 'Bangladesh', '2000-06-21', 21, 156, 9, 154, 566, 21, 78),
       ('Bangladesh','Mehidy Hasan','Bowler', 28, 'Bangladesh', '2003-06-15', 18, 156, 10, 245, 854, 0, 9),
       ('Bangladesh','Shakib ul Hasan','All Rounder', 27, 'Bangladesh', '2005-08-07', 16, 156, 11, 344, 845, 36, 87),
       ('Bangladesh','Mahmudullah','All Rounder', 27, 'Bangladesh', '2003-06-08', 18, 156, 5, 444, 921, 35, 98),
       ('Bangladesh','Liton Das','Wicket Keeper', 30, 'Bangladesh', '2000-07-5', 21, 156, NULL, NULL, 896, 45, 153);

# ZIMBABWE TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('Zimbabwe','Kevin Kasuza','Batsman', 32, 'Zimbabwe', '2000-01-11', 21, 156, NULL, NULL, 742, 66, 115),
       ('Zimbabwe','Milton Shumba','Batsman', 28, 'Zimbabwe', '2003-03-18', 18, 156, NULL, NULL, 635, 55, 96),
       ('Zimbabwe','Takudzwanashe Kaitano','Batsman', 26, 'Zimbabwe', '2006-08-09', 15, 156, NULL, NULL, 854, 85, 158),
       ('Zimbabwe','Tarisai Kenneth Musakanda','Batsman', 32, 'Zimbabwe', '2004-06-04', 17, 156, NULL, NULL, 445, 45, 91),
       ('Zimbabwe','Luke Mafuwa Jongwe','Bowler', 33, 'Zimbabwe', '2009-09-23', 12, 156, 12, 358, 897, 2, 35),
       ('Zimbabwe','Roy Kaia','Bowler', 30, 'Zimbabwe', '2000-04-22', 21, 156, 8, 354, 756, 5, 42),
       ('Zimbabwe','Wesley Madhevere','Bowler', 29, 'Zimbabwe', '2000-06-21', 21, 156, 9, 154, 566, 21, 78),
       ('Zimbabwe','Brendan Taylor','Bowler', 28, 'Zimbabwe', '2003-06-15', 18, 156, 10, 245, 854, 0, 9),
       ('Zimbabwe','Donald Tiripano','All Rounder', 27, 'Zimbabwe', '2005-08-07', 16, 156, 11, 344, 845, 36, 87),
       ('Zimbabwe','Richard Ngarava','All Rounder', 27, 'Zimbabwe', '2003-06-08', 18, 156, 5, 444, 921, 35, 98),
       ('Zimbabwe','Blessing Muzarabani','Wicket Keeper', 30, 'Zimbabwe', '2000-07-5', 21, 156, NULL, NULL, 896, 45, 153);
       
# SOUTH AFRICA TEAM DATA
insert into player(team_name, player_name,  player_type, player_age, player_nationality, joindate, experience, 
                   avg_score, economy,wickets_taken, matches_played, centuries, fifties)
values ('South Africa','Du Plessis','Batsman', 32, 'South Africa', '2000-01-11', 21, 156, NULL, NULL, 742, 66, 115),
       ('South Africa','Hashim Amla','Batsman', 28, 'South Africa', '2003-03-18', 18, 156, NULL, NULL, 635, 55, 96),
       ('South Africa','JP Duminy','Batsman', 26, 'South Africa', '2006-08-09', 15, 156, NULL, NULL, 854, 85, 158),
       ('South Africa','David Miller','Batsman', 32, 'South Africa', '2004-06-04', 17, 156, NULL, NULL, 445, 45, 91),
       ('South Africa','Imran Tahir','Bowler', 33, 'South Africa', '2009-09-23', 12, 156, 12, 358, 897, 2, 35),
       ('South Africa','Lungi Ngidi','Bowler', 30, 'South Africa', '2000-04-22', 21, 156, 8, 354, 756, 5, 42),
       ('South Africa','Tabraiz Shamsi','Bowler', 29, 'South Africa', '2000-06-21', 21, 156, 9, 154, 566, 21, 78),
       ('South Africa','Beuran Hendricks','Bowler', 28, 'South Africa', '2003-06-15', 18, 156, 10, 245, 854, 0, 9),
       ('South Africa','Chris Morris','All Rounder', 27, 'South Africa', '2005-08-07', 16, 156, 11, 344, 845, 36, 87),
       ('South Africa','Dwaine Pretorius','All Rounder', 27, 'South Africa', '2003-06-08', 18, 156, 5, 444, 921, 35, 98),
       ('South Africa','Quinton De Kock','Wicket Keeper', 30, 'South Africa', '2000-07-5', 21, 156, NULL, NULL, 896, 45, 153);
 

 
