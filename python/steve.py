import mysql.connector
# Patrick Stop Changing the mother-fucking SQL password
db = mysql.connector.connect(
    host="remotemysql.com",
    user="47l2llZFr2",
    passwd="92MbL79qCW",
    database="47l2llZFr2"
)
mycursor = db.cursor()

sql = "SELECT * FROM files ORDER BY tags"

mycursor.execute(sql)


myresult = mycursor.fetchall()

for x in myresult:
  print(x)

print(db)