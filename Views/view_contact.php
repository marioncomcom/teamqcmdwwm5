<?php require_once 'Utils/header.php'; ?>
<main>
    <section class="w-100 pb-4 d-flex justify-content-center pb-4">

        <form id="loginForm" method="post" action="?controller=connected&action=">
        
        <div class=" heading" style="color: #FF3859; font-size: 22px; font-weight: bold; text-align: center;">Contactez-nous</div><br>

            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1" style="font-weight: bold;">Nom</label><span style="color: #FF3859;">*</span>
                <input type="text" name="name" id="form2Example1" class="form-control" placeholder="Nom" />
            </div>

            <!-- First Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2" style="font-weight: bold;">Prénom</label><span style="color: #FF3859;">*</span>
                <input type="text" name="name" id="form2Example2" class="form-control" placeholder="Prénom" />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example3" style="font-weight: bold;">Email</label><span style="color: #FF3859;">*</span>
                <input type="email" name="email" id="form2Example3" class="form-control" placeholder="Email" />
            </div>

            <!-- Subject input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example4" style="font-weight: bold;">Objet</label><span style="color: #FF3859;">*</span>
                <input type="text" name="subject" id="form2Example4" class="form-control" placeholder="Objet" />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example5" style="font-weight: bold;">Message</label><span style="color: #FF3859;">*</span>
                <textarea name="message" rows="5" cols="50" id="form2Example5" class="form-control" placeholder="Message"></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #FF3859; border: black">Envoyer</button>
        </form>
    </section>
</main>
<?php require_once 'Utils/footer.php'; ?>