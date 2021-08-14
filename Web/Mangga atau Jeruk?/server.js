const express = require('express');
const path = require('path');
const cookieParser = require('cookie-parser');

const app = express();

const PORT = process.env.PORT || 80;

app.use(cookieParser());

app.listen(PORT, () => {
    console.log(`Listening on port ${PORT}`);
});

app.get('/', (req, res) => {
    const cookie = req.cookies.buah;
    if (cookie === 'bWFuZ2dh') {
        res.send('KMTETICTF{tinggal_ganti_cookie_lur_manggajeruk_g874hnviwd}');
        return;
    }
    res.cookie('buah','amVydWs=');
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});