<form id="formaudit" action="test/submit_test_filiale.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="hidden" name="suicide_q" value="<?= $row['suicide_q'] ?>">
<input type="hidden" name="comment_msg" value="<?= $row['comment_msg'] ?>">
    <!-- Question AUDIT 1 -->
  <div class="mb-4">
      <label class="form-label fw-bold">1. À quelle fréquence buvez-vous une boisson contenant de l’alcool ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r1audit1" value="Jamais" required>
              <label class="form-check-label" for="r1audit1">Jamais</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r2audit1" value="Mensuel ou moins">
              <label class="form-check-label" for="r2audit1">Mensuel ou moins</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r3audit1" value="2-4 fois par mois">
              <label class="form-check-label" for="r3audit1">2-4 fois par mois</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r4audit1" value="2-3 fois par semaine">
              <label class="form-check-label" for="r4audit1">2-3 fois par semaine</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r5audit1" value="4 fois ou plus par semaine">
              <label class="form-check-label" for="r5audit1">4 fois ou plus par semaine</label>
          </div>
      </div>
  </div>
  <!-- Question AUDIT 2 -->
  <div class="mb-4">
      <label class="form-label fw-bold">2. Combien de boissons contenant de l’alcool avez-vous par jour typique lorsque vous buvez ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r1audit2" value="1 ou 2" required>
              <label class="form-check-label" for="r1audit2">1 ou 2</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r2audit2" value="3 ou 4">
              <label class="form-check-label" for="r2audit2">3 ou 4</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r3audit2" value="5 ou 6">
              <label class="form-check-label" for="r3audit2">5 ou 6</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r4audit2" value="7 à 9">
              <label class="form-check-label" for="r4audit2">7 à 9</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r5audit2" value="10 ou plus">
              <label class="form-check-label" for="r5audit2">10 ou plus</label>
          </div>
      </div>
  </div>
  <!-- Question AUDIT 3 -->
  <div class="mb-4">
      <label class="form-label fw-bold">3. À quelle fréquence buvez-vous six verres ou plus en une seule occasion ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r1audit3" value="Jamais" required>
              <label class="form-check-label" for="r1audit3">Jamais</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r2audit3" value="Moins de mensuel">
              <label class="form-check-label" for="r2audit3">Moins de mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r3audit3" value="Mensuel">
              <label class="form-check-label" for="r3audit3">Mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r4audit3" value="Hebdomadaire">
              <label class="form-check-label" for="r4audit3">Hebdomadaire</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r5audit3" value="Quotidiennement ou presque quotidiennement">
              <label class="form-check-label" for="r5audit3">Quotidiennement ou presque quotidiennement</label>
          </div>
      </div>
  </div>

  <!-- Question AUDIT 4 -->
  <div class="mb-4">
      <label class="form-label fw-bold">4. À quelle fréquence au cours de la dernière année avez-vous constaté que vous n’étiez pas capable d’arrêter de boire une fois que vous aviez commencé ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r1audit4" value="Jamais" required>
              <label class="form-check-label" for="r1audit4">Jamais</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r2audit4" value="Moins de mensuel">
              <label class="form-check-label" for="r2audit4">Moins de mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r3audit4" value="Mensuel">
              <label class="form-check-label" for="r3audit4">Mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r4audit4" value="Hebdomadaire">
              <label class="form-check-label" for="r4audit4">Hebdomadaire</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r5audit4" value="Quotidiennement ou presque quotidiennement">
              <label class="form-check-label" for="r5audit4">Quotidiennement ou presque quotidiennement</label>
          </div>
      </div>
  </div>

  <!-- Question AUDIT 5 -->
  <div class="mb-4">
      <label class="form-label fw-bold">5. À quelle fréquence au cours de la dernière année n’avez-vous pas fait ce que l’on attendait normalement de vous à cause de la consommation d’alcool ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r1audit5" value="Jamais" required>
              <label class="form-check-label" for="r1audit5">Jamais</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r2audit5" value="Moins de mensuel">
              <label class="form-check-label" for="r2audit5">Moins de mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r3audit5" value="Mensuel">
              <label class="form-check-label" for="r3audit5">Mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r4audit5" value="Hebdomadaire">
              <label class="form-check-label" for="r4audit5">Hebdomadaire</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r5audit5" value="Quotidiennement ou presque quotidiennement">
              <label class="form-check-label" for="r5audit5">Quotidiennement ou presque quotidiennement</label>
          </div>
      </div>
  </div>

  <!-- Question AUDIT 6 -->
  <div class="mb-4">
      <label class="form-label fw-bold">6. À quelle fréquence au cours de la dernière année avez-vous eu besoin d’un premier verre le matin pour vous remettre d’une séance de consommation excessive ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r1audit6" value="Jamais" required>
              <label class="form-check-label" for="r1audit6">Jamais</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r2audit6" value="Moins de mensuel">
              <label class="form-check-label" for="r2audit6">Moins de mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r3audit6" value="Mensuel">
              <label class="form-check-label" for="r3audit6">Mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r4audit6" value="Hebdomadaire">
              <label class="form-check-label" for="r4audit6">Hebdomadaire</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r5audit6" value="Quotidiennement ou presque quotidiennement">
              <label class="form-check-label" for="r5audit6">Quotidiennement ou presque quotidiennement</label>
          </div>
      </div>
  </div>

  <!-- Question AUDIT 7 -->
  <div class="mb-4">
      <label class="form-label fw-bold">7. À quelle fréquence au cours de l’année dernière avez-vous eu un sentiment de culpabilité ou de remords après avoir bu ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r1audit7" value="Jamais" required>
              <label class="form-check-label" for="r1audit7">Jamais</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r2audit7" value="Moins de mensuel">
              <label class="form-check-label" for="r2audit7">Moins de mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r3audit7" value="Mensuel">
              <label class="form-check-label" for="r3audit7">Mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r4audit7" value="Hebdomadaire">
              <label class="form-check-label" for="r4audit7">Hebdomadaire</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r5audit7" value="Quotidiennement ou presque quotidiennement">
              <label class="form-check-label" for="r5audit7">Quotidiennement ou presque quotidiennement</label>
          </div>
      </div>
  </div>

  <!-- Question AUDIT 8 -->
  <div class="mb-4">
      <label class="form-label fw-bold">8. À quelle fréquence au cours de la dernière année avez-vous été incapable de vous souvenir de ce qui s’est passé la veille à cause de votre consommation d’alcool ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" id="r1audit8" value="Jamais" required>
              <label class="form-check-label" for="r1audit8">Jamais</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" id="r2audit8" value="Moins de mensuel">
              <label class="form-check-label" for="r2audit8">Moins de mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" id="r3audit8" value="Mensuel">
              <label class="form-check-label" for="r3audit8">Mensuel</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" id="r4audit8" value="Hebdomadaire">
              <label class="form-check-label" for="r4audit8">Hebdomadaire</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q8" id="r5audit8" value="Quotidiennement ou presque quotidiennement">
              <label class="form-check-label" for="r5audit8">Quotidiennement ou presque quotidiennement</label>
          </div>
      </div>
  </div>
  <!-- Question AUDIT 9 -->
  <div class="mb-4">
      <label class="form-label fw-bold">9. Avez-vous ou quelqu’un d’autre été blessé à cause de votre consommation d’alcool ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" id="r1audit9" value="Non" required>
              <label class="form-check-label" for="r1audit9">Non</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" id="r2audit9" value="Oui, mais pas l’année dernière">
              <label class="form-check-label" for="r2audit9">Oui, mais pas l’année dernière</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q9" id="r3audit9" value="Oui, pendant la dernière année">
              <label class="form-check-label" for="r3audit9">Oui, pendant la dernière année</label>
          </div>
      </div>
  </div>

  <!-- Question AUDIT 10 -->
  <div class="mb-4">
      <label class="form-label fw-bold">10. Est-ce qu’un parent, un ami, un médecin ou un autre travailleur de la santé s’inquiète de votre consommation d’alcool ou vous a suggéré de réduire ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" id="r1audit10" value="Non" required>
              <label class="form-check-label" for="r1audit10">Non</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" id="r2audit10" value="Oui, mais pas l’année dernière">
              <label class="form-check-label" for="r2audit10">Oui, mais pas l’année dernière</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q10" id="r3audit10" value="Oui, pendant la dernière année">
              <label class="form-check-label" for="r3audit10">Oui, pendant la dernière année</label>
          </div>
      </div>
  </div>
  <button type="submit" class="btn btn-success my-3">Afficher le resultat de test</button>
</form>