import mysql.connector

db = mysql.connector.connect(
    host="remotemysql.com",
    user="47l2llZFr2",
    passwd="92Mb7L9qCW",
    database="47l2llZFr2"
)
mycursor = db.cursor()

sql = "SELECT * FROM files ORDER BY id"

mycursor.execute(sql)


myresult = mycursor.fetchall()

for x in myresult:
  print(x)

print(db)