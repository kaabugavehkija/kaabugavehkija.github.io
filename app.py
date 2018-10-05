from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def index():
    return render_template("index.html")

# @app.route("/daivid")
# def David():
#     return "Hello, David"

# @app.route("/<string:name>")
# def hello(name):
#     name = name.capitalize()
#     return "<h1>Hello {}</h1>".format(name)