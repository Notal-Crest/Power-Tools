# install pyrogram, pyshorteners, flask, python3, pyperclip
import pyshorteners
from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route("/", methods=['POST'])

def index():
       
    if request.method == 'POST':
        data = request.get_json()
        url = data['data']
        link = url.strip('\"')
        shortener = pyshorteners.Shortener()
        short_url = shortener.tinyurl.short(link)
        
        return jsonify({'short_url': short_url})
    else:
        return jsonify({'error': 'Invalid request'})

# curl -X POST -H "Content-Type: application/json" -d '{"data": "https://www.google.com"}' http://localhost:5000/

if __name__ == '__main__':
    app.run(debug=True)
    # while True:
    #     find_item()
    #     wait = 1

    #     print(f'Waiting for {wait} minutes...')
    #     time.sleep(wait * 60)
