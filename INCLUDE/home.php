<!-- Copyright Michele Marostica - michelemaro@gmail.com-->

<!-- Home page -->

<div class="pageContent" id="homeContent">
    
    <div id="homeTitle">
        
        <h1 id="title1">Az. Agr.</h1>

        <h1 id="title2"><span>R</span>izzett<span>O</span></h1>

        <div id="homeLanguageSelection">
            <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['lang'] = 'it';
                    $query_string['page'] = "intro";
                    echo "index.php?".http_build_query($query_string);
                    ?>">
                <img src="IMAGES/ita.gif" alt="italiano" />
            </a>
            <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['lang'] = 'en';
                    $query_string['page'] = "intro";
                    echo "index.php?".http_build_query($query_string);
                    ?>">
                <img src="IMAGES/eng.gif" alt="english" />
            </a>
            <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['lang'] = 'de';
                    $query_string['page'] = "intro";
                    echo "index.php?".http_build_query($query_string);
                    ?>">
                <img src="IMAGES/deu.gif" alt="deutch" />
            </a>
        </div>
        
    </div>

</div>
