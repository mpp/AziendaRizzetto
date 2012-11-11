<!-- Copyright Michele Marostica - michelemaro@gmail.com-->

<!-- Products page -->

<script>
$(document).ready(function() {
    $("#productsMenu li").click( function(){
        var index = $("#productsMenu li").index(this);
        
        $("#productsView li").fadeOut(300);
        $("#productsMenu li").removeClass('active');
        
        $("#productsView li").eq(index).fadeIn(300);
        $("#productsMenu li").eq(index).addClass('active');
        
    });
});
</script>

<div class="pageContent" id="productsContent">
    
    <div class="backBlack"></div>
    
    <hr/>
    
    <ul id="productsMenu">
        <li class="active">
            Prosecco Spumante D.O.C.G.
        </li>
        <li>
            Prosecco Spumante D.O.C.
        </li>
        <li>
            Vin del Brolo<br/>I.G.T.
        </li>
        <li>
            Rosso Gildo<br/>I.G.T.
        </li>
    </ul>
    
    <ul id="productsView">
        <li class="active">
            <div class="title">
                <h1>Prosecco Spumante D.O.C.G.</h1>
                <h2>Prosecco di Conegliano e Valdobbiadene</h2>
                <h3>Denominazione di Origine Controllata e Garantita</h3>
            </div>
            
            <div class="image">
                <img src="IMAGES/spumante.png" alt="spumante docg" />
            </div>
            
            <div class="description">
                <?php echo $languageStrings[$lang]['products']['spumante'][0]; ?>
            </div>
        </li>
        <li>
            <div class="title">
                <h1>Prosecco Spumante D.O.C.</h1>
                <h2>Prosecco Treviso</h2>
                <h3>Denominazione di Origine Controllata</h3>
            </div>
            
            <div class="image">
                <img src="IMAGES/frizzante.png" alt="spumante doc" />
            </div>
            
            <div class="description">
                <?php echo $languageStrings[$lang]['products']['frizzante'][0]; ?>
            </div>
        </li>
        <li>
            <div class="title">
                <h1>Vin del Brolo I.G.T.</h1>
                <h2>Vino Frizzante</h2>
                <h3>Indicazione Geografica Tipica</h3>
            </div>
            
            <div class="image">
                <img src="IMAGES/brolo.png" alt="vin del brolo igt" />
            </div>
            
            <div class="description">
                <?php echo $languageStrings[$lang]['products']['brolo'][0]; ?>
            </div>
        </li>
        <li>
            <div class="title">
                <h1>Rosso Gildo I.G.T.</h1>
                <h2>Cabernet Sauvignon</h2>
                <h3>Indicazione Geografica Tipica</h3>
            </div>
            
            <div class="image">
                <img src="IMAGES/gildo.png" alt="rosso gildo igt" />
            </div>
            
            <div class="description">
                <?php echo $languageStrings[$lang]['products']['gildo'][0]; ?>
            </div>
        </li>
    </ul>
    
    <hr/>
</div>
