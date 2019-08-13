#!"C:\Python37\python.exe"
import cgi
print ("Content-Type:text/html \n\n")
print("<img src=1.jpg height=100 width=80 class=user style='position:relative;left:120px;'>")
print("<h1 style='top:-150px;text-align:center;position:relative;font-size:70px;color:white;text-shadow: 2px 2px 5px Yellow;font-family: Comic Sans MS, cursive, sans-serif;'>Movie Rating Prediction</h1>")
print ("<html><body>")
print("<body style='background: url(movie3.jpg)no-repeat;background-size:cover;background-position: center;'>")
import pandas as pd
from sklearn.linear_model import LogisticRegression
data=pd.read_csv("Final.csv")
X=data.iloc[:,:-1].values
Y=data.iloc[:,9].values
model=LogisticRegression()
model.fit(X,Y)
form=cgi.FieldStorage()
x=form.getvalue("mname")
a=form.getvalue("1")
a=int(a)
b=form.getvalue("2")
b=int(b)
c=form.getvalue("3")
c=int(c)
d=form.getvalue("4")
d=int(d)
e=form.getvalue("5")
e=int(e)
f=form.getvalue("6")
f=int(f)
g=form.getvalue("7")
g=int(g)
h=form.getvalue("8")
h=int(h)
i=form.getvalue("9")
i=int(i)
X_predict=[[a,b,c,d,e,f,g,h,i]]
y_predict=model.predict(X_predict)
print("<h1 style=color:red;text-align:center;position:absolute;top:210px;left:560px;1>"+x+"</h1>")
u=y_predict[0]
e=int(u)
f=str(u);
print("<br>")
#print("The Rating of the movie is:",u)
print("<h1 style=color:white;text-align:center;position:absolute;top:260px;left:540px;>The Rating of the movie is:"+f+"</h1></div>") 
import mysql.connector
con=mysql.connector.connect(user="root",password="akalol",host="localhost",database="pro")
cur=con.cursor()
cur.execute("insert into rate values (%s,%s)",(x,int(e)))
con.commit()
print("</body></html>") 
