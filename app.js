var express = require('express');
var helmet = require('helmet');
var app = express(helmet());

app.use(express.static('public'));

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

app.get('/resume.html', (req, res) => {
    res.sendFile(__dirname + '/resume.html');
});

app.use((req, res, next) =>{
    res.status(404);
    res.send({error: 'Page not Found!'});
    return;
});

app.listen(1337, () => {
    console.log("Website running on port 1337.");
});
