<!doctype html>
<html lang="en">
<head>
    <title>Chat</title>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div>
        <div style="margin: 15px 0 15px 0;">
            <input id="message-input"  type="text" name="name" placeholder="message" style="border-width: 1px ">
        </div>
        <div>
            <button id="send-button">
                <p>Отправить</p>
            </button>
        </div>
    <div id="response">

    </div>
</div>
    <script type="module">

        window.Echo.channel('chatting').listen('ChatEvent', () =>{
            document.getElementById('response').innerHTML += '<p>' + 'hello human' + '</p>';
        });

        document.getElementById('send-button').addEventListener('click', async function () {
            const input = document.getElementById('message-input');
            const message = input.value.trim();
            window.axios.post('/message',{
                message: message
            })

        });

    </script>
</body>
</html>

