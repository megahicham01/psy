<form id="formssrs" action="test/submit_test_filiale.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="hidden" name="suicide_q" value="<?= $row['suicide_q'] ?>">
<input type="hidden" name="comment_msg" value="<?= $row['comment_msg'] ?>">
  <!-- Question 1 -->
<div class="mb-4">
  <label class="form-label fw-bold">
    1. Avez-vous souhaité être mort ou souhaité pouvoir dormir et ne pas vous réveiller ?
  </label>
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q1" id="r1srssq1q" value="oui" required>
      <label class="form-check-label" for="srss_q1q">Oui</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q1" id="r2srssq1q" value="non">
      <label class="form-check-label" for="srss_q1q">Non</label>
    </div>
  </div>
</div>

<!-- Question 2 -->
<div class="mb-4">
  <label class="form-label fw-bold">
    2. Avez-vous réellement eu des pensées de vous suicider ?
  </label>
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q2" id="r1srssq2q" value="oui" required>
      <label class="form-check-label" for="srss_q2q">Oui</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q2" id="r2srssq2q" value="non">
      <label class="form-check-label" for="srss_q2q">Non</label>
    </div>
  </div>
</div>

<!-- Question 3 (visible if Q2 = Oui) -->
<div class="mb-4">
  <label class="form-label fw-bold">
    3. Avez-vous réfléchi à la façon dont vous pourriez faire cela ?
  </label>
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q3" id="r1srssq3q" value="oui">
      <label class="form-check-label" for="srss_q3q">Oui</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q3" id="r2srssq3q" value="non">
      <label class="form-check-label" for="srss_q3q">Non</label>
    </div>
  </div>
</div>

<!-- Question 4 (visible if Q2 = Oui) -->
<div class="mb-4">
  <label class="form-label fw-bold">
    4. Avez-vous eu ces pensées et aviez-vous l’intention d’agir en conséquence ?
  </label>
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q4" id="r1srssq4q" value="oui">
      <label class="form-check-label" for="srss_q4q">Oui</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q4" id="r2srssq4q" value="non">
      <label class="form-check-label" for="srss_q4q">Non</label>
    </div>
  </div>
</div>

<!-- Question 5 (visible if Q2 = Oui) -->
<div class="mb-4">
  <label class="form-label fw-bold">
    5. Avez-vous commencé à travailler ou déterminé les détails de la façon de vous tuer ? 
    Avez-vous l’intention de mettre en œuvre ce plan ?
  </label>
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q5" id="r1srssq5q" value="oui">
      <label class="form-check-label" for="srss_q5q">Oui</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q5" id="r2srssq5q" value="non">
      <label class="form-check-label" for="srss_q5q">Non</label>
    </div>
  </div>
</div>

<!-- Question 6 -->
<div class="mb-4">
  <label class="form-label fw-bold">
    6. Avez-vous déjà fait quelque chose, commencé à faire quelque chose ou préparé à faire quelque chose pour mettre fin à votre vie ?
  </label>
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q6" id="r1srssq6q" value="oui" required>
      <label class="form-check-label" for="srss_q6q">Oui</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q6" id="r2srssq6q" value="non">
      <label class="form-check-label" for="srss_q6q">Non</label>
    </div>
  </div>
</div>

<!-- Question 7 (visible if Q6 = Oui) -->
<div class="mb-4">
  <label class="form-label fw-bold">
    Si OUI à la 6 : Était-ce au cours des trois derniers mois ?
  </label>
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q7" id="r1srssq7q" value="oui">
      <label class="form-check-label" for="srss_q7q">Oui</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="q7" id="r2srssq7q" value="non">
      <label class="form-check-label" for="srss_q7q">Non</label>
    </div>
  </div>
</div>

<button type="submit" class="btn btn-success my-3">Afficher le resultat de test</button>
</form>