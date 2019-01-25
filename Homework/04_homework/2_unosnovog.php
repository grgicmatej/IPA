<form action="index.php" method="post">
    <h1><p class="inputforma">DODAJ NOVOG KORISNIKA</p></h1><br>
    <p class="inputforma">Ime</p>
    <p class="inputforma"><input type="text" name="ime" placeholder="Ime" style="text-align:center"/></p>
    <p class="inputforma">Prezime</p>
    <p class="inputforma"><input type="text" name="prezime" placeholder="Prezime" style="text-align:center" /></p>
    <p class="inputforma">Datum rođenja</p>
    <p class="inputforma"><input type="date" name="datumrodenja" min="1940-01-01" max="2018-12-31"/></p>
    <p class="inputforma">Kontakt broj</p>
    <p class="inputforma"><input type="number" name="telefon" placeholder="Broj telefona" style="text-align:center" /></p>
    <p class="inputforma">Spol</p>
    <p class="inputforma"><select name="spol" form="carform">
                            <option value="volvo">Muško</option>
                            <option value="saab">Žensko</option>
                        </select></p>
    <p class="inputforma">Iznos mjesečnih primanja</p>
    <p class="inputforma"><input type="number" name="primanja" placeholder="Iznos mjesečnih prihoda" style="text-align:center" /></p>
    <div class="inputforma">
        <input type="submit" value="Dodaj" placeholder="Dodaj" class="gumb" />
        <input type="reset" value="Resetiraj" placeholder="Resetiraj" class="gumb"/>
        <form action="index.php" method="post">
            <input type="submit" value="Otkaži" placeholder="Otkaži" class="gumb" /></p>
        </form>  
    </div>
</form>