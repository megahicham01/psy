<form id="formgad" action="test/submit_test_filiale.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="hidden" name="suicide_q" value="<?= $row['suicide_q'] ?>">
<input type="hidden" name="comment_msg" value="<?= $row['comment_msg'] ?>">
    <!-- Question GAD 1 -->
    <div class="mb-4">
        <label class="form-label fw-bold">1. Se sentir nerveux, anxieux ou sur les nerfs</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r1gad1" value="Pas du tout sûr" required>
                <label class="form-check-label" for="r1gad1">Pas du tout sûr</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r2gad1" value="Plusieurs jours">
                <label class="form-check-label" for="r2gad1">Plusieurs jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r3gad1" value="Plus de la moitié des jours">
                <label class="form-check-label" for="r3gad1">Plus de la moitié des jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r4gad1" value="Presque tous les jours">
                <label class="form-check-label" for="r4gad1">Presque tous les jours</label>
            </div>
        </div>
    </div>

    <!-- Question GAD 2 -->
    <div class="mb-4">
        <label class="form-label fw-bold">2. Ne pas être capable d’arrêter ou de contrôler l’inquiétude</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r1gad2" value="Pas du tout sûr" required>
                <label class="form-check-label" for="r1gad2">Pas du tout sûr</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r2gad2" value="Plusieurs jours">
                <label class="form-check-label" for="r2gad2">Plusieurs jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r3gad2" value="Plus de la moitié des jours">
                <label class="form-check-label" for="r3gad2">Plus de la moitié des jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r4gad2" value="Presque tous les jours">
                <label class="form-check-label" for="r4gad2">Presque tous les jours</label>
            </div>
        </div>
    </div>

    <!-- Question GAD 3 -->
    <div class="mb-4">
        <label class="form-label fw-bold">3. Trop s’inquiéter de différentes choses</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r1gad3" value="Pas du tout sûr" required>
                <label class="form-check-label" for="r1gad3">Pas du tout sûr</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r2gad3" value="Plusieurs jours">
                <label class="form-check-label" for="r2gad3">Plusieurs jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r3gad3" value="Plus de la moitié des jours">
                <label class="form-check-label" for="r3gad3">Plus de la moitié des jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r4gad3" value="Presque tous les jours">
                <label class="form-check-label" for="r4gad3">Presque tous les jours</label>
            </div>
        </div>
    </div>

    <!-- Question GAD 4 -->
    <div class="mb-4">
        <label class="form-label fw-bold">4. Difficulté à se détendre</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r1gad4" value="Pas du tout sûr" required>
                <label class="form-check-label" for="r1gad4">Pas du tout sûr</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r2gad4" value="Plusieurs jours">
                <label class="form-check-label" for="r2gad4">Plusieurs jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r3gad4" value="Plus de la moitié des jours">
                <label class="form-check-label" for="r3gad4">Plus de la moitié des jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r4gad4" value="Presque tous les jours">
                <label class="form-check-label" for="r4gad4">Presque tous les jours</label>
            </div>
        </div>
    </div>

    <!-- Question GAD 5 -->
    <div class="mb-4">
        <label class="form-label fw-bold">5. Être tellement agité qu’il est difficile de rester assis</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r1gad5" value="Pas du tout sûr" required>
                <label class="form-check-label" for="r1gad5">Pas du tout sûr</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r2gad5" value="Plusieurs jours">
                <label class="form-check-label" for="r2gad5">Plusieurs jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r3gad5" value="Plus de la moitié des jours">
                <label class="form-check-label" for="r3gad5">Plus de la moitié des jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r4gad5" value="Presque tous les jours">
                <label class="form-check-label" for="r4gad5">Presque tous les jours</label>
            </div>
        </div>
    </div>

    <!-- Question GAD 6 -->
    <div class="mb-4">
        <label class="form-label fw-bold">6. Devenir facilement agacé ou irritable</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r1gad6" value="Pas du tout sûr" required>
                <label class="form-check-label" for="r1gad6">Pas du tout sûr</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r2gad6" value="Plusieurs jours">
                <label class="form-check-label" for="r2gad6">Plusieurs jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r3gad6" value="Plus de la moitié des jours">
                <label class="form-check-label" for="r3gad6">Plus de la moitié des jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r4gad6" value="Presque tous les jours">
                <label class="form-check-label" for="r4gad6">Presque tous les jours</label>
            </div>
        </div>
    </div>

    <!-- Question GAD 7 -->
    <div class="mb-4">
        <label class="form-label fw-bold">7. Se sentir effrayé comme si quelque chose de terrible pouvait arriver</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r1gad7" value="Pas du tout sûr" required>
                <label class="form-check-label" for="r1gad7">Pas du tout sûr</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r2gad7" value="Plusieurs jours">
                <label class="form-check-label" for="r2gad7">Plusieurs jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r3gad7" value="Plus de la moitié des jours">
                <label class="form-check-label" for="r3gad7">Plus de la moitié des jours</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r4gad7" value="Presque tous les jours">
                <label class="form-check-label" for="r4gad7">Presque tous les jours</label>
            </div>
        </div>
    </div>
    <!-- Question GAD 8 -->
    <div class="mb-4">
        <label class="form-label fw-bold">8. Si vous avez coché des problèmes, à quel point cela a-t-il été difficile pour vous de faire votre travail, de prendre soin des choses à la maison ou de vous entendre avec d’autres personnes ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r1gad8" value="Pas difficile du tout" required>
                <label class="form-check-label" for="r1gad8">Pas difficile du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r2gad8" value="Quelque peu difficile">
                <label class="form-check-label" for="r2gad8">Quelque peu difficile</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r3gad8" value="Très difficile">
                <label class="form-check-label" for="r3gad8">Très difficile</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r4gad8" value="Extrêmement difficile">
                <label class="form-check-label" for="r4gad8">Extrêmement difficile</label>
            </div>
        </div>
    </div>
<button type="submit" class="btn btn-success my-3">Afficher le resultat de test</button>

</form>