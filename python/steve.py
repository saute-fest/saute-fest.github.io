import mysql.connector

db = mysql.connector.connect(
    host="remotemysql.com",
    user="47l2llZFr2",
    passwd="92Mb7L9qCW",
    database="47l2llZFr2"
)
mycursor = db.cursor()

mycursor.execute("SELECT * FROM  files WHERE id=48")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)

print(db)