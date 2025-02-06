<!-- Ajouter entreprise -->
<div class="row row-sm">
    <div class="modal fade" id="examplemodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Ajouter une entreprise</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class=" card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez le nom de l'entreprise">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez l'ifu de l'entreprise">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez la localisation de l'entreprise">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Description:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez le logo de l'entreprise">
                            </div>
                            <div class="form-group">
                                <select class="form-control form-select"
                                    id="default-dropdown" data-bs-placeholder="Choissisez l'administrateur" required>
                                    <option value="">Choissisez l'administrateur</option>
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary br-7"
                                data-bs-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary br-7">Soumetre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin ajouter entreprise -->

<!-- Modifier entreprise -->
<div class="row row-sm">
    <div class="modal fade" id="modifierentreprise" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Modifier vos informations</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class=" card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez le nom de l'entreprise">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez l'ifu de l'entreprise">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez la localisation de l'entreprise">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Description:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="input"
                                    placeholder="Enter Your Name" value="Entrez le logo de l'entreprise">
                            </div>
                            <div class="form-group">
                                <select class="form-control form-select"
                                    id="default-dropdown" data-bs-placeholder="Choissisez l'administrateur" required>
                                    <option value="">Choissisez l'administrateur</option>
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary br-7"
                                data-bs-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary br-7">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin modifier entreprise -->

<!-- voir plus -->
<div class="row row-sm">
    <div class="modal fade" id="voirentreprise" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">
                    <span class="badge rounded-pill bg-primary-transparent me-1 my-1 fw-semibold">Les information de nom de l'entreprise</span></h5>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Soumettre</button>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin voir plus -->
