/*
using node.js, you can list all the files in a directory
Caution: this is an experimental code and might not work for every one. 
user's discration is therefore advised. 
*/

var fs=require('fs');

var dir='./tmpl/';
var data={};

fs.readdir(dir,function(err,files){
    if (err) throw err;
    var c=0;
    files.forEach(function(file){
        c++;
        fs.readFile(dir+file,'utf-8',function(err,html){
            if (err) throw err;
            data[file]=html;
            if (0===--c) {
                console.log(data);  //socket.emit('init', {data: data});
            }
        });
    });
});