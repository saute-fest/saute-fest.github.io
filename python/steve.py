import sqlite3
import mysql.connect

connection = mysql.connect("remotemysql.com")
# connecting to the SQL database ^
crsr = connection.cursor()

crsr.execute("SELECT * FROM 'file'")
# I need access to SQL for Steve to do his job
# steve would like you to visit https://www.w3schools.com/python/python_mysql_getstarted.asp

ans= crsr.fetchall()
# store all the fetched data in the ans variable^

for i in ans:
    print(i)
# loop to print all the data ^  
