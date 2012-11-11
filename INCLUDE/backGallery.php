<!-- Copyright Michele Marostica - michelemaro@gmail.com-->

<!-- Some images -->

<ul id="bkgallery">
    <?php
    
    for ($i = 1; $i < 11; $i++)
    {
        echo '<li>
                <img src="IMAGES/back_'.$i.'.jpg" id="im'.$i.'" alt="img" />
            </li>';
    }
    
    ?>
</ul>