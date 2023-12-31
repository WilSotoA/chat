<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/css/chat.css'])
    @vite(['resources/js/app.js', 'resources/js/chat.js'])
    <title>Chat</title>
</head>

<body>
    <section class="msger">
        <header class="msger-header">
            <div class="msger-header-title">
                <i class="fas fa-comment-alt">
                </i>
                <span class="chatWith"></span>
                <span class="typing" style="display: none;">Esta escribiendo...</span>
            </div>
            <div class="msger-header-options">
                <span class="chatStatus offline"><i class="fas fa-globe"></i></span>
            </div>
        </header>
        <div class="msger-chat">
        </div>
        <form class="msger-inputarea">
            <input type="text" class="msger-input" oninput="sendTypingEvent()" placeholder="Enter your message...">
            <button type="submit" class="msger-send-btn">Send</button>
            <input type="hidden" name="chatId" value="{{ $chat->id }}">
        </form>
    </section>

    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
</body>

</html>
