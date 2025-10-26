<form id="formisi" action="test/submit_test_filiale.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="hidden" name="suicide_q" value="<?= $row['suicide_q'] ?>">
<input type="hidden" name="comment_msg" value="<?= $row['comment_msg'] ?>">
  <!-- Question ISI 1 -->
  <div class="mb-4">
      <label class="form-label fw-bold">1. Difficulté à s’endormir</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r1isi1" value="Aucun" required>
              <label class="form-check-label" for="r1isi1">Aucun</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r2isi1" value="Doux">
              <label class="form-check-label" for="r2isi1">Doux</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r3isi1" value="Modéré">
              <label class="form-check-label" for="r3isi1">Modéré</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r4isi1" value="Sévère">
              <label class="form-check-label" for="r4isi1">Sévère</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q1" id="r5isi1" value="Très sévère">
              <label class="form-check-label" for="r5isi1">Très sévère</label>
          </div>
      </div>
  </div>

  <!-- Question ISI 2 -->
  <div class="mb-4">
      <label class="form-label fw-bold">2. Difficulté à rester un sommeil</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r1isi2" value="Aucun" required>
              <label class="form-check-label" for="r1isi2">Aucun</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r2isi2" value="Doux">
              <label class="form-check-label" for="r2isi2">Doux</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r3isi2" value="Modéré">
              <label class="form-check-label" for="r3isi2">Modéré</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r4isi2" value="Sévère">
              <label class="form-check-label" for="r4isi2">Sévère</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q2" id="r5isi2" value="Très sévère">
              <label class="form-check-label" for="r5isi2">Très sévère</label>
          </div>
      </div>
  </div>

  <!-- Question ISI 3 -->
  <div class="mb-4">
      <label class="form-label fw-bold">3. Problèmes de réveil trop tôt</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r1isi3" value="Aucun" required>
              <label class="form-check-label" for="r1isi3">Aucun</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r2isi3" value="Doux">
              <label class="form-check-label" for="r2isi3">Doux</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r3isi3" value="Modéré">
              <label class="form-check-label" for="r3isi3">Modéré</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r4isi3" value="Sévère">
              <label class="form-check-label" for="r4isi3">Sévère</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q3" id="r5isi3" value="Très sévère">
              <label class="form-check-label" for="r5isi3">Très sévère</label>
          </div>
      </div>
  </div>
  <!-- Question ISI 4 -->
  <div class="mb-4">
      <label class="form-label fw-bold">4. À quel point êtes-vous SATISFAIT/INSATISFAIT de votre sommeil ACTUEL ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r1isi4" value="Très satisfait" required>
              <label class="form-check-label" for="r1isi4">Très satisfait</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r2isi4" value="Satisfait">
              <label class="form-check-label" for="r2isi4">Satisfait</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r3isi4" value="Modérément satisfait">
              <label class="form-check-label" for="r3isi4">Modérément satisfait</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r4isi4" value="Insatisfait">
              <label class="form-check-label" for="r4isi4">Insatisfait</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q4" id="r5isi4" value="Très insatisfait">
              <label class="form-check-label" for="r5isi4">Très insatisfait</label>
          </div>
      </div>
  </div>
  <!-- Question ISI 5 -->
  <div class="mb-4">
      <label class="form-label fw-bold">5. À quel point pensez-vous que votre problème de sommeil est perceptible pour les autres en termes de dégradation de la qualité de votre vie ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r1isi5" value="Pas du tout perceptible" required>
              <label class="form-check-label" for="r1isi5">Pas du tout perceptible</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r2isi5" value="Un peu">
              <label class="form-check-label" for="r2isi5">Un peu</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r3isi5" value="Quelque peu">
              <label class="form-check-label" for="r3isi5">Quelque peu</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r4isi5" value="Beaucoup">
              <label class="form-check-label" for="r4isi5">Beaucoup</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q5" id="r5isi5" value="Très perceptible">
              <label class="form-check-label" for="r5isi5">Très perceptible</label>
          </div>
      </div>
  </div>
  <!-- Question ISI 6 -->
  <div class="mb-4">
      <label class="form-label fw-bold">6. À quel point êtes-vous INQUIET/EN DÉTRESSE à propos de votre problème de sommeil actuel ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r1isi6" value="Pas du tout inquiet" required>
              <label class="form-check-label" for="r1isi6">Pas du tout inquiet</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r2isi6" value="Un peu">
              <label class="form-check-label" for="r2isi6">Un peu</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r3isi6" value="Quelque peu">
              <label class="form-check-label" for="r3isi6">Quelque peu</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r4isi6" value="Beaucoup">
              <label class="form-check-label" for="r4isi6">Beaucoup</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q6" id="r5isi6" value="Très inquiet">
              <label class="form-check-label" for="r5isi6">Très inquiet</label>
          </div>
      </div>
  </div>
  <!-- Question ISI 7 -->
  <div class="mb-4">
      <label class="form-label fw-bold">7. Dans quelle mesure considérez-vous que votre problème de sommeil INTERFÈRE avec votre fonctionnement quotidien (par exemple, fatigue diurne, humeur, capacité à fonctionner au travail/tâches quotidiennes, concentration, mémoire, humeur, etc.) ACTUELLEMENT ?</label>
      <div class="d-flex justify-content-evenly flex-wrap">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r1isi7" value="Pas du tout interférant" required>
              <label class="form-check-label" for="r1isi7">Pas du tout interférant</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r2isi7" value="Un peu">
              <label class="form-check-label" for="r2isi7">Un peu</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r3isi7" value="Quelque peu">
              <label class="form-check-label" for="r3isi7">Quelque peu</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r4isi7" value="Beaucoup">
              <label class="form-check-label" for="r4isi7">Beaucoup</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="q7" id="r5isi7" value="Beaucoup d’interférence">
              <label class="form-check-label" for="r5isi7">Beaucoup d’interférence</label>
          </div>
      </div>
  </div>
<button type="submit" class="btn btn-success my-3">Afficher le resultat de test</button>
</form>