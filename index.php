<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Gerador de CV</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="fonts/font-awesome/css/all.css" rel="stylesheet"> <!--load all styles -->
        <link rel="shortcut icon" href="img/favicon.png" />
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center" id="form-row">
                <div class="col-lg-5" id="form-column">
                    <form action="curriculo.php" method="post">

                        <div style="text-align: center;">
                            <h3>Gera��o de Curr�culo</h3>
                            <div class="form-text">Preencha os campos abaixo para gerar seu curr�culo automaticamente.<br>(Os campos em negrito s�o obrigat�rios)</div>
                        </div>

                        <!------------------------- IN�CIO �REA DE DADOS PESSOAIS ------------------------------>
                        <h5 style="margin-top: 40px;">Dados Pessoais</h5>
                        <hr>
                        <div class="mb-3">
                            <label for="nome" class="form-label"><strong>Nome</strong></label>
                            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nomeDesc" required>
                            <div id="nomeDesc" class="form-text">Informe seu nome.</div>
                        </div>
                        <div class="mb-3">
                            <label for="data-nascimento" class="form-label"><strong>Data de Nascimento</strong></label>
                            <input type="date" class="form-control" id="data-nascimento" name="dtNascimento" aria-describedby="nascimentoDesc" required>
                            <div id="nascimentoDesc" class="form-text">informe sua data de nascimento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label"><strong>Telefone</strong></label>
                            <input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="telefoneDesc" required>
                            <div id="telefoneDesc" class="form-text">Informe seu telefone para contato.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><strong>E-mail</strong></label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailDesc" required>
                            <div id="emailDesc" class="form-text">Informe seu endere�o de e-mail.</div>
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label"><strong>Endere�o</strong></label>
                            <input type="text" class="form-control" id="endereco" name="endereco" aria-describedby="enderecoDesc" required>
                            <div id="enderecoDesc" class="form-text">Informe seu endere�o, ex: "Rua Caracol 1151".</div>
                        </div>
                        <div class="mb-3">
                            <label for="bairro" class="form-label"><strong>Bairro</strong></label>
                            <input type="text" class="form-control" id="bairro" name="bairro" aria-describedby="bairroDesc" required>
                            <div id="bairroDesc" class="form-text">Informe o bairro onde reside.</div>
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label"><strong>Estado</strong></label>
                            <select id="estado" name="estado" class="form-select" aria-describedby="estadoDesc" required>
                                <option value="">Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amap�</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Cear�</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Esp�rito Santo</option>
                                <option value="GO">Goi�s</option>
                                <option value="MA">Maranh�o</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Par�</option>
                                <option value="PB">Para�ba</option>
                                <option value="PR">Paran�</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piau�</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rond�nia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">S�o Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="EX">Estrangeiro</option>
                            </select>
                            <div id="estadoDesc" class="form-text">Selecione seu estado.</div>
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label"><strong>Cidade</strong></label>
                            <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="cidadeDesc" required>
                            <div id="cidadeDesc" class="form-text">Informe sua cidade.</div>
                        </div>
                        <!------------------------- FIM �REA DE DADOS PESSOAIS ------------------------------>



                        <!------------------------- IN�CIO �REA DE INFORMA��ES PARA O CURR�CULO ------------------------------>
                        <h5 style="margin-top: 40px;">Informa��es para o Curr�culo</h5>
                        <hr>
                        <div class="mb-3">
                            <label for="objectivo" class="form-label"><strong>Objetivo</strong></label>
                            <textarea class="form-control" id="objetivo" name="objetivo" aria-describedby="objectivoDesc"></textarea>
                            <div id="objectivoDesc" class="form-text">Coloque aqui qual a �rea ou cargo de seu interesse.</div>
                        </div>
                        <div class="mb-3">
                            <label for="habComp" class="form-label"><strong>Habilidades e Compet�ncias</strong></label>
                            <textarea class="form-control" id="habComp" name="habilidadesCompetencias" aria-describedby="habCompDesc"></textarea>
                            <div id="habCompDesc" class="form-text">Escreva aqui quais s�o seus pontos fortes e o quanto isso pode ser �til para o cargo ao qual est� se candidatando.</div>
                        </div>
                        <!------------------------- FIM �REA DE INFORMA��ES PARA O CURR�CULO ------------------------------>



                        <!------------------------- IN�CIO �REA DE EXPERI�NCIA ------------------------------>
                        <h5 style="margin-top: 40px;">Experi�ncia</h5>
                        <hr>
                        <div id="experiencia-container">
                            <div class="alert alert-warning">Para adicionar empresas, clique no bot�o "Adicionar nova Empresa".</div>
                            <!--<div id="exp-0" class="dynamic-container">
                                <h6>Empresa</h6>
                                <hr>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="dt-inicio-0" class="form-label">In�cio</label>
                                            <input type="date" class="form-control" id="dt-inicio-0" name="dt-inicio[]" placeholder="Data de In�cio" aria-describedby="dt-inicio-0-desc" required="false">
                                            <div id="dt-inicio-0-desc" class="form-text">Informe a data de in�cio.</div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="dt-fim-0" class="form-label">Fim</label>
                                            <input type="date" class="form-control" id="dt-fim-0" name="dt-fim[]" placeholder="Data de Fim" aria-describedby="dt-fim-0-desc" required="false">
                                            <div id="dt-fim-0-desc" class="form-text">Informe a data de t�rmino.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="empresa-0" class="form-label">Empresa</label>
                                            <input type="text" class="form-control" id="empresa-0" name="empresa[]" aria-describedby="empresa-0-desc">
                                            <div id="empresa-0-desc" class="form-text">Informe o nome da empresa.</div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="cargo-0" class="form-label">Cargo</label>
                                            <input type="text" class="form-control" id="cargo-0" name="cargo[]" aria-describedby="cargo-0-desc">
                                            <div id="cargo-0-desc" class="form-text">Informe o cargo ocupado.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="responsabilidade-0" class="form-label">Responsabilidades</label>
                                    <textarea class="form-control" id="responsabilidade-0" name="responsabilidade[]" aria-describedby="responsabilidade-0-desc"></textarea>
                                    <div id="responsabilidade-0-desc" class="form-text">Incluir aqui uma breve s�ntese das principais atividades e conquistas.</div>
                                </div>
                            </div>-->
                        </div>
                        <div style="text-align: end">
                            <button type="button" onclick="addEmpresa()" class="btn btn-secondary"><i class="fas fa-plus"></i> Adicionar nova Empresa</button>
                        </div>
                        <!------------------------- FIM �REA DE EXPERI�NCIA ------------------------------>



                        <!------------------------- IN�CIO �REA DE EDUCA��O ------------------------------>
                        <h5 style="margin-top: 40px;">Educa��o</h5>
                        <hr>
                        <div id="educacao-container">
                            <div class="alert alert-warning">Para adicionar institui��es de ensino, clique no bot�o "Adicionar nova Institui��o".</div>
                            <!--<div id="edc-0" class="dynamic-container">
                                <h6>Institui��o</h6>
                                <hr>
                                <div class="mb-3">
                                    <label for="dt-formacao-0" class="form-label">Data de Forma��o</label>
                                    <input type="date" class="form-control" id="dt-fim-0" name="dt-formacao[]" placeholder="Data de Forma��o" aria-describedby="dt-formacao-0-desc" required="false">
                                    <div id="dt-formacao-0-desc" class="form-text">Informe a data em que se formou.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="instituicao-0" class="form-label">Institui��o de Ensino</label>
                                    <input type="text" class="form-control" id="instituicao-0" name="instituicao[]" aria-describedby="instituicao-0-desc">
                                    <div id="instituicao-0-desc" class="form-text">Informe o nome da institui��o.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="cursos-premios-0" class="form-label">Cursos e Pr�mios</label>
                                    <textarea class="form-control" id="cursos-premios-0" name="cursos-premios[]" aria-describedby="cursos-premios-0-desc"></textarea>
                                    <div id="cursos-premios-0-desc" class="form-text">Incluir aqui um resumo dos cursos, pr�mios, homenagens e trabalhos escolares relevantes.</div>
                                </div>
                            </div>-->
                        </div>
                        <div style="text-align: end">
                            <button type="button" onclick="addInstituicao()" class="btn btn-secondary"><i class="fas fa-plus"></i> Adicionar nova Institui��o</button>
                        </div>
                        <!------------------------- FIM �REA DE EDUCA��O ------------------------------>



                        <button style="margin-top: 50px; width: 100%" type="submit" class="btn btn-primary"><i class="fas fa-address-card"></i> Gerar Curr�culo</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            
            var numEmpresa = 1;
            var numInstituicao = 1;

            function addEmpresa() {
                let html = `<div id="exp-0" class="dynamic-container">
                <h6>Empresa ` + numEmpresa + `</h6>
                <hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="dt-inicio-0" class="form-label">In�cio</label>
                            <input type="date" class="form-control" id="dt-inicio-` + numEmpresa + `" name="dt-inicio[]" placeholder="Data de In�cio" aria-describedby="dt-inicio-` + numEmpresa + `-desc" required>
                            <div id="dt-inicio-` + numEmpresa + `-desc" class="form-text">Informe a data de in�cio.</div>
                        </div>
                        <div class="col-lg-6">
                            <label for="dt-fim-` + numEmpresa + `" class="form-label">Fim</label>
                            <input type="date" class="form-control" id="dt-fim-` + numEmpresa + `" name="dt-fim[]" placeholder="Data de Fim" aria-describedby="dt-fim-` + numEmpresa + `-desc" required>
                            <div id="dt-fim-` + numEmpresa + `-desc" class="form-text">Informe a data de t�rmino.</div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="empresa-` + numEmpresa + `" class="form-label">Empresa</label>
                            <input type="text" class="form-control" id="empresa-` + numEmpresa + `" name="empresa[]" aria-describedby="empresa-` + numEmpresa + `-desc" required>
                            <div id="empresa-` + numEmpresa + `-desc" class="form-text">Informe o nome da empresa.</div>
                        </div>
                        <div class="col-lg-6">
                            <label for="cargo-` + numEmpresa + `" class="form-label">Cargo</label>
                            <input type="text" class="form-control" id="cargo-` + numEmpresa + `" name="cargo[]" aria-describedby="cargo-` + numEmpresa + `-desc" required>
                            <div id="cargo-` + numEmpresa + `-desc" class="form-text">Informe o cargo ocupado.</div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="responsabilidade-` + numEmpresa + `" class="form-label">Responsabilidades</label>
                    <textarea class="form-control" id="responsabilidade-` + numEmpresa + `" name="responsabilidade[]" aria-describedby="responsabilidade-` + numEmpresa + `-desc" required></textarea>
                    <div id="responsabilidade-` + numEmpresa + `-desc" class="form-text">Incluir aqui uma breve s�ntese das principais atividades e conquistas.</div>
                </div>
                </div>`;
                $('#experiencia-container').append(html);
                numEmpresa++;
            }
            
            function addInstituicao() {
                let html = `<div id="edc-` + numInstituicao + `" class="dynamic-container">
                                <h6>Institui��o ` + numInstituicao + `</h6>
                                <hr>
                                <div class="mb-3">
                                    <label for="dt-formacao-` + numInstituicao + `" class="form-label">Data de Forma��o</label>
                                    <input type="date" class="form-control" id="dt-fim-` + numInstituicao + `" name="dt-formacao[]" placeholder="Data de Forma��o" aria-describedby="dt-formacao-` + numInstituicao + `-desc" required>
                                    <div id="dt-formacao-` + numInstituicao + `-desc" class="form-text">Informe a data em que se formou.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="instituicao-` + numInstituicao + `" class="form-label">Institui��o de Ensino</label>
                                    <input type="text" class="form-control" id="instituicao-` + numInstituicao + `" name="instituicao[]" aria-describedby="instituicao-` + numInstituicao + `-desc" required>
                                    <div id="instituicao-` + numInstituicao + `-desc" class="form-text">Informe o nome da institui��o.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="cursos-premios-` + numInstituicao + `" class="form-label">Cursos e Pr�mios</label>
                                    <textarea class="form-control" id="cursos-premios-` + numInstituicao + `" name="cursos-premios[]" aria-describedby="cursos-premios-` + numInstituicao + `-desc" required></textarea>
                                    <div id="cursos-premios-` + numInstituicao + `-desc" class="form-text">Incluir aqui um resumo dos cursos, pr�mios, homenagens e trabalhos escolares relevantes.</div>
                                </div>
                            </div>`;
                $('#educacao-container').append(html);
                numInstituicao++;
            }
        
        </script>
    </body>
</html>