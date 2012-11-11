<div id="topBar">
    
    <div class="backBlack"></div>
    
    <img id="backTitle" src="IMAGES/backTitle.png" alt="schizzo"/>
    
    <div id="logo">
        <h1 id="title1">Az. Agr.</h1>

        <h1 id="title2"><span>R</span>izzett<span>O</span></h1>
    </div>
    
    <div id="languageSelection">
        <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['lang'] = 'it';
                    echo "index.php?".http_build_query($query_string);
                    ?>">
            <img src="IMAGES/ita.gif" alt="italiano" />
        </a>
        <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['lang'] = 'en';
                    echo "index.php?".http_build_query($query_string);
                    ?>">
            <img src="IMAGES/eng.gif" alt="english" />
        </a>
        <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['lang'] = 'de';
                    echo "index.php?".http_build_query($query_string);
                    ?>">
            <img src="IMAGES/deu.gif" alt="deutch" />
        </a>
    </div>

    <ul id="topMenu">
        
        <li class="topMenuItem <?php 
                                if (strcmp($page, 'intro') == 0)
                                {
                                    echo 'active';
                                }
                                else
                                {
                                    echo 'notActive';
                                }
                                ?>">
            <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['lang'] = $lang;
                    $query_string['page'] = "intro";
                    echo "index.php?".http_build_query($query_string);
                    ?>"><?php echo $languageStrings[$lang]['menu'][0] ?></a>
        </li>
        
        <li class="topMenuItemSpace"></li>
        
        <li class="topMenuItem <?php 
                                if (strcmp($page, 'products') == 0)
                                {
                                    echo 'active';
                                }
                                else
                                {
                                    echo 'notActive';
                                }
                                ?>">
            <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['page'] = "products";
                    $query_string['product'] = 0;
                    $query_string['lang'] = $lang;
                    echo "index.php?".http_build_query($query_string);
                    ?>"><?php echo $languageStrings[$lang]['menu'][2] ?></a>
        </li>
        
        <li class="topMenuItemSpace"></li>
        
        <li class="topMenuItem <?php 
                                if (strcmp($page, 'land') == 0)
                                {
                                    echo 'active';
                                }
                                else
                                {
                                    echo 'notActive';
                                }
                                ?>">
            <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['page'] = "land";
                    $query_string['lang'] = $lang;
                    echo "index.php?".http_build_query($query_string);
                    ?>"><?php echo $languageStrings[$lang]['menu'][1] ?></a>
        </li>
        
        <li class="topMenuItemSpace"></li>
        
        <li class="topMenuItem <?php 
                                if (strcmp($page, 'gallery') == 0)
                                {
                                    echo 'active';
                                }
                                else
                                {
                                    echo 'notActive';
                                }
                                ?>">
            <a href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['page'] = "gallery";
                    $query_string['lang'] = $lang;
                    echo "index.php?".http_build_query($query_string);
                    ?>"><?php echo $languageStrings[$lang]['menu'][4] ?></a>
        </li>
        
        <li class="topMenuItemSpace"></li>
        
        <li class="topMenuItem <?php 
                                if (strcmp($page, 'contacts') == 0)
                                {
                                    echo 'active';
                                }
                                else
                                {
                                    echo 'notActive';
                                }
                                ?>">
            <a class="white" href="<?php 
                    parse_str($_SERVER['QUERY_STRING'], $query_string);
                    $query_string['page'] = "contacts";
                    $query_string['lang'] = $lang;
                    echo "index.php?".http_build_query($query_string);
                    ?>"><?php echo $languageStrings[$lang]['menu'][3] ?></a>
        </li>
        
    </ul> <!-- Top Menu -->
    
</div> <!-- Top Bar -->