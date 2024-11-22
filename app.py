from flask import Flask, render_template, send_from_directory, make_response
import csv
import os

app = Flask(__name__)

# Function to load participant data
def load_participants():
    participants = []
    # Open the CSV file located in the same directory as app.py
    with open('participants.csv', 'r') as file:
        reader = csv.DictReader(file)
        for row in reader:
            participants.append({
                'name': row['Full Name'],
                'certificate_path': row['Certificate Path']
            })
    return sorted(participants, key=lambda x: x['name'])  # Sort alphabetically

@app.route('/')
def home():
    # Render index.html as the main webpage
    return render_template('index.html')

@app.route('/certificates')
def certificates():
    participants = load_participants()
    return render_template('certificates.html', participants=participants)

# Route to serve and force download of certificate files
@app.route('/certificates/<path:filename>')
def serve_certificate(filename):
    # Specify the path to the 'static/certificates' directory
    response = make_response(send_from_directory('static/certificates', filename))
    response.headers["Content-Disposition"] = f"attachment; filename={filename}"
    return response

if __name__ == '__main__':
    app.run(debug=True)
