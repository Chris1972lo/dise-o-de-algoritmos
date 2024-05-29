from flask import Flask, render_template, request, redirect, url_for
from flask_mysqldb import MySQL
app = Flask(__name__)
app.config['MYSQL_HOST']='localhost'
app.config['MYSQL_USER']='root'
app.config['MYSQL_PASSWORD']=''
app.config['MYSQL_DB']='projecto'
mysql=MySQL(app)
@app.route("/")
def completo():
    return render_template('completo.php')
@app.route('/ingresar', methods=['GET','POST'])
def ingresar():
     if request.method=='POST':
        usuario = request.form['usuario']
        contraseña = request.form['contraseña']
        categoria = request.form['categoria']
        cur=mysql.connection.cursor()
        cur.execute("SELECT * FROM temporal WHERE usuario= %s AND contraseña=%s AND categoria=%s",(usuario,contraseña,categoria))     
        usuario_encontrado = cur.fetchone()
        cur.close()
        mysql.connection.commit()
        if usuario_encontrado:
            return render_template('Bosa.php') 
        else:
            return 'Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.'
     return render_template('completo.php')  
def ruta_de_redireccion():
    return "!Acceso concedido!"
@app.route("/completo.php")
def completo2():
 return render_template('completo.php')  
@app.route("/barrios.php")
def barrios():
    return render_template('barrios.php')
@app.route("/Bosa.php")
def bosa():
    return render_template('Bosa.php')
@app.route('/databosa', methods=['POST'])
def databosa():
    if request.method=='POST':
        orden =request.form['orden']
        marca =request.form['marca']
        cantidad =request.form['cantidad']
        nombres =request.form['nombres']
        apellidos =request.form['apellidos']
        cedula =request.form['cedula']
        fecha =request.form['fecha']
        valor4 =request.form['valor4']
        hora =request.form['hora']
        salida =request.form['salida']
        cur=mysql.connection.cursor()
        cur.execute('INSERT INTO bosa (nombres,apellidos,cedula,orden,marca,fecha,cantidad,valor4,hora,salida) VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)', (nombres,apellidos,cedula,orden,marca,fecha,cantidad,valor4,hora,salida)),
        (orden,marca,cantidad)
        mysql.connection.commit()
    return render_template('Bosa.php')
@app.route("/candelaria.php")
def candelaria():
    return render_template('candelaria.php')
@app.route("/chapinero.php")
def chapinero():
    return render_template('chapinero.php')
@app.route("/kennedy.php")
def kennedy():
    return render_template('kennedy.php')
@app.route("/puente.php")
def puente():
    return render_template('puente.php')
@app.route("/Usaquen.php")
def Usaquen():
    return render_template('Usaquen.php')
if __name__=='__main__':
    app.run(debug=True, port=5000)        
    