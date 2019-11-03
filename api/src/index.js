const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
 host:'mysql-container-1',
 user: 'root',
 password: 'senha@123',
 database: 'api_db'
});

connection.connect();

/*rest paths*/
app.get('/products', function(req, resp){

    connection.query('SELECT * FROM products', function(error, results){

        if(error){
          throw error  
        };

        resp.send(results.map(item => ({name: item.name, price: item.price})));
    });
});


app.listen(9001, '0.0.0.0', function(){
 console.log('Listening on port 9001...');
});