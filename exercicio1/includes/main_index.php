<main>
        <div>
            <h1>Feed</h1>
    
            <div class="popup-flutuante">
            <form>
                <fieldset>
                    <legend>Novo Post</legend>

                    <label for="descricao">Descrição</label>
                    <br>
                    <textarea id="descricao" name="descricao" cols="120" style="resize: none"></textarea>
                    <br>
                    <br>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 3px">
                        <div>
                        <label for="arquivo" class="arquivo">
                        <img src="imagens/imagem_icon.png" alt="imagem" style="height: 22px;">
                        </label>
                        <input id="arquivo" name="arquivo" type="file" style="display:none">

                        </div>
                    
                    <div>
                        <button type="submit">Enviar</button>
                    </div>
                    
                    </div>
                </fieldset>
            </form>
            </div>
                
            <div>
                <?php 
                $lista_post = [];
                
                    if (isset($_GET['descricao'])) {
                        echo "Descricao informado: " . $_GET['descricao'];
                        }
                ?>
            </div>
        </div>
    </main>