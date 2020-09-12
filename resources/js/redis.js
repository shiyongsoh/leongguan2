var redis 

redis.subscribe();
redis.on('message',function(channel,message){
    console.log(channel,messsage);
    // message = JSON.parse(message);

})

server.listen(3000);