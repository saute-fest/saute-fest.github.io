import sqlite3

connection = sqlite3.connect("remotemysql.com") 
#connecting to the SQL database ^
crsr = connection.cursor() 

crsr.execute(sql: "remotemysql.com")