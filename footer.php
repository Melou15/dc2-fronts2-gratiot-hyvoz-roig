<style>
  #footer{
    padding: 40px 20px;
    background-color: #F3C9D3;
  }

  footer{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 40px;
    color: #6c757d;
  }

  footer section{ 
    padding: 10px;
    width: 100%;
    max-width: 300px;
    text-align: center;
  }

  footer section h2{
    margin-bottom: 20px;
    font-size: 20px;
    text-transform: uppercase;
  }

  footer section p{
    margin-bottom: 10px;
    cursor: pointer;
  }

  .fa-solid, .fa-brands{
    color: #F4315B;
  } 

  .paiement p{
    display: inline-flex;
    padding-right: 15px;
  }

  .paiement p:hover{
    color: #F4315B;
  }

  .mentions_legale{
    text-align: center;
    font-size: 14px;
    margin-top: 40px;
    color: #6c757d;
  }

  .mentions_legale a{
    color: #F4315B;
  }
</style>

<footer id="footer">
  <section>
    <h2>Nous contacter</h2>
    <p><i class="fa-solid fa-phone"></i> 06 04 08 44 12</p>
    <p><i class="fa-solid fa-house"></i> 155 Rue Aung San Suuki <br> --- 34000 Montpellier</p>
  </section>

  <section>
    <h2>Nos moyens de paiement</h2>
    <div class="paiement">
      <p><i class="fa-brands fa-paypal fa-2x"></i></p>
      <p><i class="fa-brands fa-google-pay fa-2x"></i></p>
      <p><i class="fa-brands fa-apple-pay fa-2x"></i></p>
      <p><i class="fa-brands fa-cc-mastercard fa-2x"></i></p>
    </div>
  </section>

  <section>
    <h2>Nos réseaux sociaux</h2>
    <p><i class="fa-brands fa-instagram fa-2x"></i> @duttifruits</p>
    <p><i class="fa-brands fa-linkedin fa-2x"></i> Dutti Fruits</p>
  </section>

  <div class="mentions_legale">
    <p>Les données personnelles importées sur ce site sont prélevées dans le respect de la loi relative à l'informatique, aux fichiers et aux libertés. Les informations requises ne seront en aucun cas transmises à des tiers. Vous êtes susceptible d'un droit d'accès, de modification, de rectification et de suppression des données qui vous concernent. 
      <br>Vous pouvez exercer ce droit en envoyant un e-mail à <a href="#">dutty_fruit@wanadoo.com.</a>
    </p>
    <p>Nous vous remercions de votre visite et de votre confiance.</p>
    <p>- GRATIOT-FLEURANT Charlotte - HYVOZ Audrey - ROIG Mélissa -</p>
  </div>
</footer>
