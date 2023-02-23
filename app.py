from flask import Flask, render_template, request, make_response, session
import os


STATIC_FOLDER = 'templates/assets'
app=Flask(__name__, static_folder=STATIC_FOLDER) #initiating flask object

@app.route("/",methods = ['GET'])
def index():
    return render_template('index.html')

@app.route("/guidelines",methods = ['GET'])
def guidelines():
    return render_template('guidelines.html')



if __name__ == "__main__":
    app.debug=True #setting the debugging option for the application instance
    app.run(host='0.0.0.0', port=80) #launching the flask's integrated development webserver