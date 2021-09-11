# lumen-tailwindo-api

Backend untuk boostrap to tailwind converter [Bs2Tailwind](https://github.com/ibrahim4529/tailwind2bs)

## Endpoint
Pada aplikasi ini hanya ada 2 endpoint yaitu https://tailwind2bs.herokuapp.com/ dan https://tailwind2bs.herokuapp.com/api/convert
untuk menggunakanya cukup lakukan http request menggunakan method post pada endpoint https://tailwind2bs.herokuapp.com/api/convert
dengan pramater body code

### Contoh Di Ajax
```javascript
const settings = {
  "url": "https://tailwind2bs.herokuapp.com/api/convert",
  "method": "POST",
  "headers": {
    "accept": "application/json",
    "content-type": "application/json"
  },
  "data": "{\"code\": \"<div class='alert alert-warning'>Simple</div>\"}"
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Contoh di python
```python
import http.client

conn = http.client.HTTPConnection("https://tailwind2bs.herokuapp.com/api/convert")

payload = "{\"code\": \"<div class='alert alert-warning'>Simple</div>\"}"

headers = {
    'accept': "application/json",
    'content-type': "application/json"
    }

conn.request("POST", "/convert", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))
```

