import flask as fl # import flask
import smbus2  # import smbus for I2C communication
from flask import Flask, render_template, jsonify # import flask

app = fl.Flask(__name__) # create a Flask app

@app.route('/') # at the end point /
def index():
    render = fl.render_template('index.html') # Fetch the index.html file 
    return render # Return the rendered template

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8090, debug=True) # Run the app on localhost:8080

@app.route('/sysStatus/<int:dataToSend>', methods=['POST'])
def sysStatus(dataToSend):
    bus = smbus2.SMBus(1) # Create a new I2C bus
    app.logger.info('PSoC Value set to: ' + str(dataToSend)) # Log the data to the console
    bus.write_byte(0x08, dataToSend) # Send the data to the PSoC
    return jsonify({'message': 'Data sent to PSoC: ' + str(dataToSend)}) # Return a JSON message to the client console