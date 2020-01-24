import sqlite3

connection = sqlite3.connect("remotemysql.com") 
# connecting to the SQL database ^
crsr = connection.cursor() 

crsr.execute("SELECT * FROM ")  
# I need access to SQL for Steve to do his job^

ans= crsr.fetchall()  
# store all the fetched data in the ans variable^

for i in ans: 
    print(i) 
# loop to print all the data ^  