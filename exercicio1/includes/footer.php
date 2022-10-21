<footer style="justify-content: space-between;">
        <quote>
            Feito por <cite>Jefferson Lima</cite>, 21 de Setembro de 2022 até <?= date('d').'/'.date('m').'/'.date('Y')?>.
        </quote>

        <div style="text-align: right;">
            <div class="link-footer">
                
                <a href="https://www.linkedin.com/in/jefferson-lima-rodrigues-400926245/">
                    <img src="imagens/icone_linkedin.png" alt="icon_gmail" style="width: 30pt; height: 30pt">
                </a>
            </div>
            <div class="link-footer">
                <a href="mailto:jeffersonlima147516@gmail.com">
                    <img src="imagens/icone_gmail.png" alt="icon_gmail" style="width: 30pt; height: 30pt">
                </a>
            </div>
        </div>
    </footer>


    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php 
    //GAMBIARRA TEMPORÁRIA
    use \App\Model\Conexao;
    

    try {
        $conexao = new PDO('mysql:host=localhost;dbname=site_jogos;',Conexao::USER,Conexao::PASS);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conexao->prepare("SELECT nome AS 'Jogos', COUNT(*) AS 'Num_usuarios' FROM estatisca_jogos GROUP BY nome ORDER BY COUNT(*) DESC");
        $sql->execute();

        while($row = $sql->fetch()) {
            $dados2[] = [
                'jogos'=>$row['Jogos'], 
                'usuarios'=>$row['Num_usuarios']
            ];
        }
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    
    ?>
    <script>
        //CONSTANTE COM DADOS RETORNADOS DO BANCO SQL
        const labels = [<?php for($i=0;$i<count($dados);$i++){if(($i + 1)<count($dados)){echo '"'.$dados2[$i]['jogos'].'",';}else{echo '"'.$dados2[$i]['jogos'].'"';}} ?>]

                    const data = {
                        labels: labels,
                        datasets: [{
                        label: 'Usuários Jogaram',
                        backgroundColor: 'rgb(0, 253, 253)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [<?php for($i=0;$i<count($dados);$i++){if(($i + 1)<count($dados)){echo $dados2[$i]['usuarios'].',';}else{echo $dados2[$i]['usuarios'];}} ?>]//DADOS RETORNADOS DO BANCO DE DADOS REFERENCIADOS DE UMA VIEW
                        }]
                    };

                    const config = {
                        type: 'bar',
                        data: data,
                        options: {
                            plugins: {
                                        title: {
                                            display: true,
                                            text: 'Gráfico de Jogos jogados por usuário'
                                        },
                                        padding: {
                                                    top: 10,
                                                    bottom: 30
                                                }
                                    }}
                    };


                    const myChart = new Chart(
                                                document.getElementById('grafico-jogo'),
                                                config
                                            );

                    Chart.defaults.font.size = 14;
    </script>

<script>
                const data1 = {
                    labels: ['Estratégia', 'Precisão', 'Habilidade', 'Velocidade', 'Inteligência'],
                    datasets: [{
                    label: 'Pontos por Habilidade',
                    borderColor: 'rgb(0, 200, 11)',
                    data: [1, 2, 3, 5, 4]
                    }]
                };

                const configurar = {
                    type: 'radar',
                    data: data1,
                    options: {
                        plugins: {
                                    title: {
                                        display: true,
                                        text: 'Overall'
                                    },
                                    padding: {
                                                top: 10,
                                                bottom: 30
                                            }
                                }}
                };


                const primeiro = new Chart(
                                            document.getElementById('primeiro-do-ranking'),
                                            configurar
                                        );
</script>

<script>
    const data2 = {
        labels: ['Estratégia', 'Precisão', 'Habilidade', 'Velocidade', 'Inteligência'],
        datasets: [{
        label: 'Pontos por Habilidade',
        borderColor: 'rgb(0, 200, 11)',
        data: [2, 3, 1, 5, 2]
        }]
    };

    const configurar2 = {
        type: 'radar',
        data: data2,
        options: {
            plugins: {
                        title: {
                            display: true,
                            text: 'Overall'
                        },
                        padding: {
                                    top: 10,
                                    bottom: 30
                                }
                    }}
    };


    const segundo = new Chart(
                                document.getElementById('segundo-do-ranking'),
                                configurar2
                            );
</script>
<script>
    const data3 = {
        labels: ['Estratégia', 'Precisão', 'Habilidade', 'Velocidade', 'Inteligência'],
        datasets: [{
        label: 'Pontos por Habilidade',
        borderColor: 'rgb(0, 200, 11)',
        data: [0, 2, 1, 3, 5]
        }]
    };

    const configurar3 = {
        type: 'radar',
        data: data3,
        options: {
            plugins: {
                        title: {
                            display: true,
                            text: 'Overall'
                        },
                        padding: {
                                    top: 10,
                                    bottom: 30
                                }
                    }}
    };


    const terceiro = new Chart(
                                document.getElementById('terceiro-do-ranking'),
                                configurar3
                            );
</script>

<script src="meuscript.js"></script>
</body>
</html>