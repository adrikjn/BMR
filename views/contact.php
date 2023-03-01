<div class="container border d-flex flex-column align-items-center bg-white mt-3 p-1" style="border: 2px solid #ccc; border-radius: 10px; padding: 10px;">
        <h1 class="fw-bold my-4 contactSize text-decoration-underline">Contactez-Nous</h1>
        <form action="lib/traitement.php" method="POST">
            
            <div class="form-floating mt-3">
                <input type="text" class="form-control bg-light" id="name" placeholder="Prénom NOM" name="name" required>
                <label class="fw-bold" for="name" style=>Prénom & NOM :</label>
              </div>
            
            <div class="row mt-5 mb-5">
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control bg-light" id="email" placeholder="nom@exemple.com" name="email" required>
                        <label class="fw-bold"  for="email">Adresse email :</label>
                      </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input type="tel" name="tel" id="tel" placeholder="+33 X-XX-XX-XX-XX" class="form-control bg-light" name="tel" required>
                        <label class="fw-bold"  for="tel">Téléphone :</label>
                    </div>
                </div>
            </div>

            <div class="form-floating mt-5 mb-5">
                <select class="form-select bg-light" id="besoin" aria-label="Floating label select example" name="besoin" required>
                  <option selected disabled>Clique pour ouvrir le menu déroulant</option>
                  <option value="tissus">Tissus</option>
                  <option value="ameublement">Tissus pour l'Ameublement</option>
                  <option value="habillement">Tissus pour l'Habillement</option>
                  <option value="linges">Linges de Maison</option>
                  <option value="mercerie">Mercerie</option>
                  <option value="passementerie">Passementerie</option>
                </select>
                <label class="fw-bold"  for="besoin">Selectionnez votre besoin</label>
              </div>
            
              <div class="form-floating mb-5 mt-5">
                <textarea class="form-control bg-light" placeholder="Leave a comment here" id="message" style="height: 100px" name="message" required></textarea>
                <label class="fw-bold"  for="message">Un message à nous parvenir avant la prise de contacte ?</label>
              </div>

              <div class="d-flex justify-content-center mb-3">
                <input type="submit" class="btn btn-primary w-50">
              </div>
                


              <script
              src="https://code.jquery.com/jquery-3.6.0.min.js"
              integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
              crossorigin="anonymous"
            ></script>
            <script
              src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"
              referrerpolicy="origin"
            ></script>
            <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>
            <script>
                  $('textarea#message').tinymce({
                height: 200,
                menubar: false,
                toolbar: 'undo redo | blocks | bold italic backcolor | ' +
                  'alignleft aligncenter alignright alignjustify | ' +
                  'bullist numlist outdent indent | removeformat | help'
              });
            </script>
        

        </form>
    </div>