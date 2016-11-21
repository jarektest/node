var express = require('express')
var app = express()

app.get('/', function (req, res) {
    res.send('jareksudis')
})

app.put('/user', function (req, res) {
    res.send('Got a PUT request at /user')
})

app.listen(2000, function () {
    console.log('Example app listening on port 2000!')
})