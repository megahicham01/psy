<form id="formssrs" action="test/submit_test_filiale.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="hidden" name="suicide_q" value="<?= $row['suicide_q'] ?>">
<input type="hidden" name="comment_msg" value="<?= $row['comment_msg'] ?>">
  <!-- Q1 -->
  <label>1. Avez-vous souhaité être mort ou souhaité pouvoir dormir et ne pas vous réveiller ?</label>
  <div>
    <input type="radio" name="crss_q1" value="oui"> Oui
    <input type="radio" name="crss_q1" value="non"> Non
  </div>

  <!-- Q2 -->
  <label>2. Avez-vous réellement eu des pensées de vous suicider ?</label>
  <div>
    <input type="radio" name="crss_q2" value="oui"> Oui
    <input type="radio" name="crss_q2" value="non"> Non
  </div>

  <!-- Q3 (show if Q2 = oui. -->
  <label>3. Avez-vous réfléchi à la façon dont vous pourriez faire cela ?</label>
  <div>
    <input type="radio" name="crss_q3" value="oui"> Oui
    <input type="radio" name="crss_q3" value="non"> Non
  </div>

  <!-- Q4 (show if Q2 = oui. -->
  <label>4. Avez-vous eu ces pensées et aviez-vous l’intention d’agir en conséquence ?</label>
  <div>
    <input type="radio" name="crss_q4" value="oui"> Oui
    <input type="radio" name="crss_q4" value="non"> Non
  </div>

  <!-- Q5 (show if Q2 = oui. -->
  <label>5. Avez-vous commencé à travailler ou déterminé les détails de la façon de vous tuer ? Avez-vous l’intention de mettre en œuvre ce plan ?</label>
  <div>
    <input type="radio" name="crss_q5" value="oui"> Oui
    <input type="radio" name="crss_q5" value="non"> Non
  </div>

  <!-- Q6 -->
  <label>6. Avez-vous déjà fait quelque chose, commencé à faire quelque chose ou préparé à faire quelque chose pour mettre fin à votre vie ?</label>
  <div>
    <input type="radio" name="crss_q6" value="oui"> Oui
    <input type="radio" name="crss_q6" value="non"> Non
  </div>

  <!-- If Q6 = oui show -->
  <label>Si OUI à la 6 : Était-ce au cours des trois derniers mois ?</label>
  <div>
    <input type="radio" name="crss_q6_3mois" value="oui"> Oui
    <input type="radio" name="crss_q6_3mois" value="non"> Non
  </div>
<button type="submit" class="btn btn-success my-3">Afficher le resultat de test</button>
</form>