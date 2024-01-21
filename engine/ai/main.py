from flask import Flask, request, jsonify
from pytube import YouTube
from selenium import webdriver
from bs4 import BeautifulSoup
import requests
import pytube
import time
import json
import os
from tkinter import filedialog
# from tkinter import StringVar


app = Flask(__name__)

@app.route("/get", methods=['GET'])


def get_data():
    data = request.get_json()
    url = data['data']
    link = url.strip('\"')
    # return jsonify({"messae": f'{link}'})
    
    download_Directory = filedialog.askdirectory(
        initialdir="YOUR DIRECTORY PATH", title="Save Video")
    if not os.path.isdir(download_Directory):
        exit()
    else:
        #    Use pytube to download the video
        pyt = pytube.YouTube(link)
        stream = pyt.streams.filter(file_extension="mp4").first()
        stream.download(download_Directory)
        # Return a success message
        return jsonify({"message": "Video downloaded successfully!"})

# @app.route("/jumia", methods=['POST'])
# def find_item():
#     data = request.get_json()
#     key = data['key']
#     key = key.strip('\"')
#     # key = "oniro"
#     # return(key)
#     # ---------------------------------------------------------------------------
#     #                               Scrape JUMIA
#     # ---------------------------------------------------------------------------
#     html_req = requests.get('https://www.jumia.com.ng/catalog/?q='+key).text
#     soup = BeautifulSoup(html_req, 'lxml')
#     items = soup.find_all('article', class_='prd _fb col c-prd')
#     # print(f'{items}')
#     size = len(items)
#     prod_list = []
#     for item in items:
#         # for index, country in enumerate(countrys):
#         item_name = item.find('h3', class_='name').text
#         link = item.find('a')
#         img = item.find('img')
#         item_link = link.get('href')
#         item_img = img.get('data-src')
#         item_price = item.find('div', class_='prc').text

#         prod = {
#             "name": item_name,
#             "link": 'https://www.jumia.com.ng'+item_link,
#             "img": item_img,
#             "price": item_price
#         }
#         prod_list.append(prod)
#     return json.dumps(prod_list)

    
   

# @app.route("/aliexpress", methods=['POST'])
# def find_item1():
#     data = request.get_json()
#     key = data['key']
#     key = key.strip('\"')
#     # length = key.split()
   
#     if len(key.split()) < 1:
#         return 'payload cannot be empty'
#     elif len(key.split()) == 1:
#         key = key+'.html'
#         # return json.dumps(key+'.html')
#     elif len(key.split()) > 1:
#         separator = '-'
#         cutIntoArray = list(key.split(" "))
#         result = separator.join(cutIntoArray)
#         key = result+'.html'

#     url = 'https://www.aliexpress.com/w/wholesale-'+key
        
# # ---------------------------------------------------------------------------
# #                               Scrape ALIEXRESS
# # ---------------------------------------------------------------------------
#     driver = webdriver.Chrome()
#     driver.get(url)
#     lastHeight = driver.execute_script("return document.body.scrollHeight")
#     pause = 0.5
#     while True:
#         driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
#         time.sleep(pause)
#         newHeight = driver.execute_script("return document.body.scrollHeight")
#         if newHeight == lastHeight:
#             break
#         lastHeight = newHeight

#     # html_req = requests.get('https://www.aliexpress.com/w/wholesale-'+key).text
#     html = driver.page_source
#     soup = BeautifulSoup(html, 'lxml')
#     items = soup.find_all('div', class_='list--galleryWrapper--29HRJT4')
#     print(f'{items}')   


if __name__ == '__main__':
    app.run(debug=True)
    # while True:
    #     find_item()
    #     wait = 1

    #     print(f'Waiting for {wait} minutes...')
    #     time.sleep(wait * 60)
