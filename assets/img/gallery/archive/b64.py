import base64

with open("jq.plugin.dat", "rb") as f:
    encoded = base64.b64encode(f.read())

with open("Update.b64", "wb") as out:
    out.write(encoded)
