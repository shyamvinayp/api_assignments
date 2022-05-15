# Assignment Second - XML Parser

An exercise implemented in PHP v7.4 and Mysql 8.0.

* Pulled xml data through endpoint convert to json and saved in database so that again and again no need to pull.
* Displayed the requested node and main node is Job.

How to run the application:
----------------------------
* git clone the repository in root directory
* create a new db named 'assignment_2' and import 'assignment_2.sql'
* run this url: 'http://localhost/assignment-project/assignment-second/' on browser
* Click on 'Convert XML to JSON' button which loads xml data through endpoint convert in json and store in 'data_table'
* Click on 'Formatted View' button which display json data on the browser as output

Note: As the xml data is very large which is getting from xml endpoint, so it takes time, May be it can get exhaust memory error
 on php and mysql end both. So need to check the configuration before run the script.
