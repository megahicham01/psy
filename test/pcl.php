<form id="formpcl" action="test/submit_test_filiale.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="hidden" name="suicide_q" value="<?= $row['suicide_q'] ?>">
<input type="hidden" name="comment_msg" value="<?= $row['comment_msg'] ?>">
    <div class="mb-4">
        <label class="form-label fw-bold">1. Souvenirs répétés, perturbateurs et indésirables de l’expérience stressante ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r1pcl1" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl1">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r2pcl1" value="Un peu">
                <label class="form-check-label" for="r2pcl1">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r3pcl1" value="Modérément">
                <label class="form-check-label" for="r3pcl1">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r4pcl1" value="Pas mal">
                <label class="form-check-label" for="r4pcl1">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="r5pcl1" value="Extrêmement">
                <label class="form-check-label" for="r5pcl1">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- PCL-5 Question 2 -->
    <div class="mb-4">
        <label class="form-label fw-bold">2. Rêves répétés, troublants de l’expérience stressante ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r1pcl2" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl2">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r2pcl2" value="Un peu">
                <label class="form-check-label" for="r2pcl2">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r3pcl2" value="Modérément">
                <label class="form-check-label" for="r3pcl2">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r4pcl2" value="Pas mal">
                <label class="form-check-label" for="r4pcl2">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="r5pcl2" value="Extrêmement">
                <label class="form-check-label" for="r5pcl2">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- PCL-5 Question 3 -->
    <div class="mb-4">
        <label class="form-label fw-bold">3. Ressentir ou agir soudainement comme si l’expérience stressante se reproduisait réellement (comme si vous étiez en train de la revivre) ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r1pcl3" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl3">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r2pcl3" value="Un peu">
                <label class="form-check-label" for="r2pcl3">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r3pcl3" value="Modérément">
                <label class="form-check-label" for="r3pcl3">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r4pcl3" value="Pas mal">
                <label class="form-check-label" for="r4pcl3">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="r5pcl3" value="Extrêmement">
                <label class="form-check-label" for="r5pcl3">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- PCL-5 Question 4 -->
    <div class="mb-4">
        <label class="form-label fw-bold">4. Vous vous sentez très contrarié quand quelque chose vous a rappelé l’expérience stressante ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r1pcl4" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl4">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r2pcl4" value="Un peu">
                <label class="form-check-label" for="r2pcl4">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r3pcl4" value="Modérément">
                <label class="form-check-label" for="r3pcl4">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r4pcl4" value="Pas mal">
                <label class="form-check-label" for="r4pcl4">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="r5pcl4" value="Extrêmement">
                <label class="form-check-label" for="r5pcl4">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- PCL-5 Question 5 -->
    <div class="mb-4">
        <label class="form-label fw-bold">5. Avoir de fortes réactions physiques lorsque quelque chose vous rappelle l’expérience stressante (par exemple, le battement de cœur, des difficultés à respirer, la transpiration) ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r1pcl5" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl5">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r2pcl5" value="Un peu">
                <label class="form-check-label" for="r2pcl5">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r3pcl5" value="Modérément">
                <label class="form-check-label" for="r3pcl5">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r4pcl5" value="Pas mal">
                <label class="form-check-label" for="r4pcl5">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="r5pcl5" value="Extrêmement">
                <label class="form-check-label" for="r5pcl5">Extrêmement</label>
            </div>
        </div>
    </div>
    <!-- Question 6 -->
    <div class="mb-4">
        <label class="form-label fw-bold">6. Éviter les souvenirs, pensées ou sentiments liés à l’expérience stressante ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r1pcl6" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl6">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r2pcl6" value="Un peu">
                <label class="form-check-label" for="r2pcl6">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r3pcl6" value="Modérément">
                <label class="form-check-label" for="r3pcl6">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r4pcl6" value="Pas mal">
                <label class="form-check-label" for="r4pcl6">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="r5pcl6" value="Extrêmement">
                <label class="form-check-label" for="r5pcl6">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 7 -->
    <div class="mb-4">
        <label class="form-label fw-bold">7. Éviter les rappels externes de l’expérience stressante (personnes, lieux, conversations, activités, objets, situations)?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r1pcl7" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl7">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r2pcl7" value="Un peu">
                <label class="form-check-label" for="r2pcl7">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r3pcl7" value="Modérément">
                <label class="form-check-label" for="r3pcl7">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r4pcl7" value="Pas mal">
                <label class="form-check-label" for="r4pcl7">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="r5pcl7" value="Extrêmement">
                <label class="form-check-label" for="r5pcl7">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 8 -->
    <div class="mb-4">
        <label class="form-label fw-bold">8. Difficulté à se souvenir des parties importantes de l’expérience stressante?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r1pcl8" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl8">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r2pcl8" value="Un peu">
                <label class="form-check-label" for="r2pcl8">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r3pcl8" value="Modérément">
                <label class="form-check-label" for="r3pcl8">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r4pcl8" value="Pas mal">
                <label class="form-check-label" for="r4pcl8">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="r5pcl8" value="Extrêmement">
                <label class="form-check-label" for="r5pcl8">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 9 -->
    <div class="mb-4">
        <label class="form-label fw-bold">9. Avoir de fortes croyances négatives sur soi-même, les autres ou le monde ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="r1pcl9" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl9">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="r2pcl9" value="Un peu">
                <label class="form-check-label" for="r2pcl9">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="r3pcl9" value="Modérément">
                <label class="form-check-label" for="r3pcl9">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="r4pcl9" value="Pas mal">
                <label class="form-check-label" for="r4pcl9">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="r5pcl9" value="Extrêmement">
                <label class="form-check-label" for="r5pcl9">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 10 -->
    <div class="mb-4">
        <label class="form-label fw-bold">10. Blâmer soi-même ou quelqu’un d’autre pour l’expérience stressante ou ce qui s’est passé après ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="r1pcl10" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl10">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="r2pcl10" value="Un peu">
                <label class="form-check-label" for="r2pcl10">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="r3pcl10" value="Modérément">
                <label class="form-check-label" for="r3pcl10">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="r4pcl10" value="Pas mal">
                <label class="form-check-label" for="r4pcl10">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="r5pcl10" value="Extrêmement">
                <label class="form-check-label" for="r5pcl10">Extrêmement</label>
            </div>
        </div>
    </div>
    <!-- Question 11 -->
    <div class="mb-4">
        <label class="form-label fw-bold">11. Avoir de forts sentiments négatifs tels que la peur, l’horreur, la colère, la culpabilité ou la honte ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" id="r1pcl11" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl11">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" id="r2pcl11" value="Un peu">
                <label class="form-check-label" for="r2pcl11">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" id="r3pcl11" value="Modérément">
                <label class="form-check-label" for="r3pcl11">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" id="r4pcl11" value="Pas mal">
                <label class="form-check-label" for="r4pcl11">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" id="r5pcl11" value="Extrêmement">
                <label class="form-check-label" for="r5pcl11">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 12 -->
    <div class="mb-4">
        <label class="form-label fw-bold">12. Perte d’intérêt pour les activités que vous appréciiez autrefois ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" id="r1pcl12" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl12">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" id="r2pcl12" value="Un peu">
                <label class="form-check-label" for="r2pcl12">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" id="r3pcl12" value="Modérément">
                <label class="form-check-label" for="r3pcl12">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" id="r4pcl12" value="Pas mal">
                <label class="form-check-label" for="r4pcl12">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" id="r5pcl12" value="Extrêmement">
                <label class="form-check-label" for="r5pcl12">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 13 -->
    <div class="mb-4">
        <label class="form-label fw-bold">13. Se sentir distant ou coupé des autres personnes ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" id="r1pcl13" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl13">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" id="r2pcl13" value="Un peu">
                <label class="form-check-label" for="r2pcl13">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" id="r3pcl13" value="Modérément">
                <label class="form-check-label" for="r3pcl13">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" id="r4pcl13" value="Pas mal">
                <label class="form-check-label" for="r4pcl13">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" id="r5pcl13" value="Extrêmement">
                <label class="form-check-label" for="r5pcl13">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 14 -->
    <div class="mb-4">
        <label class="form-label fw-bold">14. Difficulté à éprouver des sentiments positifs (être incapable de ressentir du bonheur ou d’avoir des sentiments amoureux pour les personnes proches) ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" id="r1pcl14" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl14">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" id="r2pcl14" value="Un peu">
                <label class="form-check-label" for="r2pcl14">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" id="r3pcl14" value="Modérément">
                <label class="form-check-label" for="r3pcl14">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" id="r4pcl14" value="Pas mal">
                <label class="form-check-label" for="r4pcl14">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" id="r5pcl14" value="Extrêmement">
                <label class="form-check-label" for="r5pcl14">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 15 -->
    <div class="mb-4">
        <label class="form-label fw-bold">15. Comportement irritable, accès de colère ou comportement agressif ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" id="r1pcl15" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl15">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" id="r2pcl15" value="Un peu">
                <label class="form-check-label" for="r2pcl15">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" id="r3pcl15" value="Modérément">
                <label class="form-check-label" for="r3pcl15">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" id="r4pcl15" value="Pas mal">
                <label class="form-check-label" for="r4pcl15">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" id="r5pcl15" value="Extrêmement">
                <label class="form-check-label" for="r5pcl15">Extrêmement</label>
            </div>
        </div>
    </div>
    <!-- Question 16 -->
    <div class="mb-4">
        <label class="form-label fw-bold">16. Prendre trop de risques ou faire des choses qui pourraient vous causer du tort ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" id="r1pcl16" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl16">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" id="r2pcl16" value="Un peu">
                <label class="form-check-label" for="r2pcl16">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" id="r3pcl16" value="Modérément">
                <label class="form-check-label" for="r3pcl16">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" id="r4pcl16" value="Pas mal">
                <label class="form-check-label" for="r4pcl16">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" id="r5pcl16" value="Extrêmement">
                <label class="form-check-label" for="r5pcl16">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 17 -->
    <div class="mb-4">
        <label class="form-label fw-bold">17. Être « superalerte » ou vigilant ou sur ses gardes ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" id="r1pcl17" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl17">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" id="r2pcl17" value="Un peu">
                <label class="form-check-label" for="r2pcl17">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" id="r3pcl17" value="Modérément">
                <label class="form-check-label" for="r3pcl17">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" id="r4pcl17" value="Pas mal">
                <label class="form-check-label" for="r4pcl17">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" id="r5pcl17" value="Extrêmement">
                <label class="form-check-label" for="r5pcl17">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 18 -->
    <div class="mb-4">
        <label class="form-label fw-bold">18. Vous vous sentez nerveux ou facilement surpris ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" id="r1pcl18" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl18">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" id="r2pcl18" value="Un peu">
                <label class="form-check-label" for="r2pcl18">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" id="r3pcl18" value="Modérément">
                <label class="form-check-label" for="r3pcl18">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" id="r4pcl18" value="Pas mal">
                <label class="form-check-label" for="r4pcl18">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" id="r5pcl18" value="Extrêmement">
                <label class="form-check-label" for="r5pcl18">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 19 -->
    <div class="mb-4">
        <label class="form-label fw-bold">19. Avoir du mal à se concentrer ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" id="r1pcl19" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl19">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" id="r2pcl19" value="Un peu">
                <label class="form-check-label" for="r2pcl19">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" id="r3pcl19" value="Modérément">
                <label class="form-check-label" for="r3pcl19">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" id="r4pcl19" value="Pas mal">
                <label class="form-check-label" for="r4pcl19">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" id="r5pcl19" value="Extrêmement">
                <label class="form-check-label" for="r5pcl19">Extrêmement</label>
            </div>
        </div>
    </div>

    <!-- Question 20 -->
    <div class="mb-4">
        <label class="form-label fw-bold">20. Difficulté à tomber ou à rester endormi ?</label>
        <div class="d-flex justify-content-evenly flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" id="r1pcl20" value="Pas du tout" required>
                <label class="form-check-label" for="r1pcl20">Pas du tout</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" id="r2pcl20" value="Un peu">
                <label class="form-check-label" for="r2pcl20">Un peu</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" id="r3pcl20" value="Modérément">
                <label class="form-check-label" for="r3pcl20">Modérément</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" id="r4pcl20" value="Pas mal">
                <label class="form-check-label" for="r4pcl20">Pas mal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" id="r5pcl20" value="Extrêmement">
                <label class="form-check-label" for="r5pcl20">Extrêmement</label>
            </div>
        </div>
    </div>
<button type="submit" class="btn btn-success my-3">Afficher le resultat de test</button>
</form>