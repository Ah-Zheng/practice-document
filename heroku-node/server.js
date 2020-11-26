const app = require('express')();
const PORT = 8080;

app.get('/', (req, res) => {
    res.send('Hello nodejs docker')
});

app.listen(PORT, () => {
    console.log(`Running on http://loacalhost:${PORT}`);
});