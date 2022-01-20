




> ## Soru 1
```SQL
CREATE TABLE employee 
      (
	id INTEGER,
	name VARCHAR(50),
	birthday DATE,
	email VARCHAR(100)
	
       )

```

> ## Soru 2
```SQL
11	"Jerry"	"1940-04-12"	"jwetherheada@icio.us"
12	"Vicky"	"1948-09-14"	"vfellgateb@ifeng.com"
13	"Izzy"	"1948-08-25"	"idonnersbergc@liveinternet.ru"
14	"Guendolen"	"1991-02-18"	"gwoodlandd@blogspot.com"
15	"Brigitte"	"1992-03-05"	"bkirragee@who.int"
16	"Karlotta"	"1942-04-14"	"kmollisonf@archive.org"
17	"Olympie"	"1994-12-23"	"ostealfoxg@senate.gov"
18	"Aubrie"	"2009-10-04"	"apauleyh@nps.gov"
19	"Demeter"	"1964-04-30"	"ddalinderi@ifeng.com"
20	"Mohammed"	"1986-07-30"	"mfellibrandj@twitter.com"
21	"Frankie"	"1951-04-01"	"fstolbergerk@cbsnews.com"
22	"Aurea"	"1985-03-31"	"abruyetl@is.gd"
23	"Karalee"	"2018-05-01"	"khargessm@skype.com"
24	"Chantal"	"1947-02-22"	"cclearen@hexun.com"
25	"Kailey"	"2001-12-25"	"klemino@pcworld.com"
26	"Rosina"	"1974-07-15"	"rsirettp@walmart.com"
27	"Rube"	"1956-12-16"	"rberreclothq@mtv.com"
28	"Carlie"	"1961-02-21"	"cshouttr@vimeo.com"
29	"Bendick"	"1968-04-20"	"bbazyletss@google.cn"
30	"Cosmo"	"2017-08-05"	"cedelmant@howstuffworks.com"
31	"Trefor"	"1980-09-12"	"tbauldryu@taobao.com"
32	"Winifred"	"1984-06-10"	"wandriveauv@jiathis.com"
33	"Noni"	"1962-04-25"	"nwarbyw@accuweather.com"
34	"Simonette"	"1985-12-19"	"skestlex@i2i.jp"
35	"Basile"	"1961-10-10"	"bramsayy@answers.com"
36	"Rosene"	"1945-06-16"	"rlotteringtonz@indiegogo.com"
37	"Gloriana"	"1962-07-15"	"gsouthers10@noaa.gov"
38	"Euphemia"	"1987-06-28"	"epiwall11@mit.edu"
39	"Christal"	"2018-12-04"	"cwitul12@g.co"
40	"Rowe"	"1969-03-31"	"rflewitt13@ezinearticles.com"
41	"Norah"	"1986-03-26"	"nebourne14@buzzfeed.com"
42	"Geri"	"1970-01-11"	"gcalderwood15@wikipedia.org"
43	"Tobin"	"1962-06-14"	"tdyball16@aol.com"
44	"Devon"	"1961-06-26"	"dmeeks17@yellowbook.com"
45	"Broderick"	"1965-03-26"	"bfielding18@businessinsider.com"
46	"Wash"	"2000-03-30"	"wlumbly19@photobucket.com"
47	"Demetris"	"1944-01-24"	"dcurnick1a@google.es"
48	"Hetti"	"2001-05-20"	"hsapir1b@sun.com"
49	"Felicia"	"1952-12-22"	"fleaney1c@phoca.cz"
50	"Shawn"	"1951-08-27"	"shuguenet1d@google.fr"
2	"Hilmi"	"1969-01-11"	"bismead1@photobucket.com"
1	"Hilmi"	"1993-09-13"	"hilmidemirtas94"
3	"Say"	"1993-09-13"	"hilmidemirtas94"
4	"Lelia"	"1988-09-02"	"hilmidemirtas94"
5	"Hilmi"	"1993-09-13"	"ilist4@usatoday.com"

```

> ## Soru 3
```SQL

>- UPDATE employee 
SET name = 'Hilmi',
birthday = '13-09-1993',
email = 'hilmidemirtas94'
WHERE id = 1;

>- UPDATE employee 
SET name = 'Hilmi'
WHERE id = 2;

>-UPDATE employee 
SET birthday = '13-09-1993'
WHERE id = 3;

>-UPDATE employee 
SET email = 'hilmidemirtas94'
WHERE id = 4;

>-UPDATE employee 
SET name = 'Hilmi',
birthday = '13-09-1993'
WHERE id = 5;




```

> ## Soru 4
```SQL
>-DELETE FROM employee
WHERE id = 6;

>-DELETE FROM employee
WHERE id = 7;

>-DELETE FROM employee
WHERE id = 8;

>-DELETE FROM employee
WHERE id = 9;

>-DELETE FROM employee
WHERE id = 10;
```
