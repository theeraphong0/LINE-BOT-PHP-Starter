var http = require('http');
var ip = '127.0.0.1';
var port = 1337;
 
http.createServer(function (req, response) {
    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.end('Hello World\n');
}).listen(port,ip);
 
console.log('Server running at http://' + ip + ':' + port);
