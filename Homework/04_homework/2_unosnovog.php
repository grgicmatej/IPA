<form action="dodajNovi.php" method="post">
    <h1><p class="inputforma">DODAJ NOVOG KORISNIKA</p></h1><br>
    <p class="inputforma">Ime</p>
    <p class="inputforma"><input type="text" name="nname" placeholder="Ime" style="text-align:center"/></p>
    <p class="inputforma">Prezime</p>
    <p class="inputforma"><input type="text" name="surname" placeholder="Prezime" style="text-align:center" /></p>
    <p class="inputforma">Email</p>
    <p class="inputforma"><input type="text" name="email" placeholder="Email adresa" style="text-align:center" /></p>
    <p class="inputforma">Kontakt broj</p>
    <p class="inputforma"><input type="text" name="contactphone" placeholder="Kontakt broj" style="text-align:center" /></p>
    <p class="inputforma">Vrsta korisnika</p>
    <p class="inputforma"><input type="text" name="role" placeholder="Admin / User" style="text-align:center" /></p>
    <input type="hidden" name="gamePlayedStats" value="0"/>
    <div class="inputforma">
        <input type="submit" value="Dodaj" placeholder="Dodaj" class="gumb" />
        <input type="reset" value="Resetiraj" placeholder="Resetiraj" class="gumb"/>
        <form action="index.php" method="post">
            <input type="submit" value="Otkaži" placeholder="Otkaži" class="gumb" /></p>
        </form>  
    </div>
</form>