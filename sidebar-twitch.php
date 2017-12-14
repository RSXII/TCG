<section class="twitchContainer clearfix">
    <script src= "http://player.twitch.tv/js/embed/v1.js"></script>
    <div id="twitchPlay"></div>
    <script type="text/javascript">
        var options = {
            width: '100%',
            height: '100%',
            channel: "naushy",
        };
        var player = new Twitch.Player("twitchPlay", options);
        player.setVolume(0.5);
    </script>
<!--    <div id="chatContainer">-->
    <iframe id="twitchChat"
            frameborder="0"
            scrolling="no"
            id="chat_embed"
            src="http://www.twitch.tv/naushy/chat"
            height="360"
            width="330">
    </iframe>
<!--    </div>-->
</section>