const redis = require("redis");
const client = redis.createClient();
 
client.on("error", function(error) {
  console.error(error);
});
 
client.set("key", "value", redis.print);
var asdf = client.get("laravel_database_name", redis.print);
console.log(asdf)