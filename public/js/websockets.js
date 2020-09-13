const socket = new WebSocket('ws://localhost:6379');

// socket.onopen(() => {
//   socket.send('Hello!');
// });

socket.onmessage(data => {
  console.log(data);
});