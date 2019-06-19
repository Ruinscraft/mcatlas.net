<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php') ?>

<body>
    <?php include('includes/nav.php') ?>

    <div class="content">
        <h1>Vote for MCATLAS</h1>

        <p>Cast your vote for us and earn <b>gold</b> on our Minecraft server!</p>
        <p>Click each of the links below to vote.</p>
        <small class="really-small">MCATLAS is not responsible nor will give compensation for any voting website which may incur technical difficulties. (We can't fix them!)</small>

        <div class="content-section">
            <div class="vote">
                <ul id="vote-links">
                    <li>
                        <a class="ndzn-active-voteLink nav-link" href="javascript:;" onclick="setURL(&quot;https://minecraftservers.org/vote/21539&quot;, this);">
                            MinecraftServers.org
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="javascript:;" onclick="setURL(&quot;https://minecraft-server.net/vote/creativefun/&quot;, this);">
                            Minecraft-Server.net
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="javascript:;" onclick="setURL(&quot;https://www.planetminecraft.com/server/creative-fun-3615918/vote/&quot;, this);">
                            Planet Minecraft
                        </a>
                    </li>
                </ul>
                <iframe src="https://minecraftservers.org/vote/21539" id="vote-page"></iframe>
            </div>
        </div>
        
    </div>
    <?php include('includes/footer.php') ?>
</body>

</html>