<h3>Rövid bemutatkozás:</h3>
<p>Teherautók nyomkövetésére létrejött szolgáltatás vagyunk.
Az elmúlt pár évben lettünk piacvezetők magyarországon a nyomkövetésben!
Próbálja ki, nem fogja megbánni.</p>

<!-- YT link + Video -->

<div style="position:relative;width:50%;height:0;padding-bottom:56.25%;">
    <iframe src="https://www.youtube.com/embed/KmArXr8LVto" style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<p>Egyedi gépjárművek is vannak:</p>
<video width="50%" height="50%" controls>
    
        <source src="video/kamion.mp4" type="video/mp4">
    </video>
</div>


<!-- Térkép -->


    <h3>Anyacégünk: <strong>Scania Hungária Kft.</strong></h3></br>
    
    <p>Honlapjukat ide kattintva tekintheti meg: <a href="https://www.scania.com/hu/hu/home.html">Holnap</a></p>
    <div style="position:relative;width:80%;height:0;padding-bottom:56.25%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.5130971490953!2d18.837468315626154!3d47.479916979176586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476a752ea4fa4177%3A0x86402f922942caa2!2sScania%20Hung%C3%A1ria%20Kft.%2C%20Biatorb%C3%A1gy!5e0!3m2!1shu!2shu!4v1683225273037!5m2!1shu!2shu" style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<p style="text-align:center;"><a target="_blank" href="https://www.google.com/maps?q=scania+biatorb%C3%A1gy&rlz=1C1CHZN_huHU994HU994&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiJpdTFptz-AhUPFewKHRzfBt8Q_AUoAnoECAEQBA">Nagyobb térkép</a></p>

<!-- GPS -->
<p> Az aktuális helyzeted GPS koordinátája</p>
<p>Hasonló elven működik a gépkocsik aktuális helyzetlekérése:</p>
<button onclick="getLocation()">Próbáld ki, klikkelj ide</button>
<p id="demo"></p>

<script>
    var x = document.getElementById("demo");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Ez a böngésző nem támogatja a földrajzi helymeghatározást.";
        }
    }
    function showPosition(position) {
        x.innerHTML = "Szélesség: " + position.coords.latitude + "<br> Hosszúság: " + position.coords.longitude;
    }
    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "Felhasználó elutasította a helymeghatározást.";
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Nem lehet meghatározni a helyet.";
                break;
            case error.TIMEOUT:
                x.innerHTML = "A helymeghatározás túllépte az időkorlátot.";
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "Ismeretlen hiba történt a helymeghatározás során.";
                break;
        }
    }
</script>
<p>Ön az aktuális helyzetét jeleníti meg a weboldal koordinátákkal.</p>