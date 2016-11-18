<!-- app/Resources/views/home/homepage.html.php -->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/framework/css/foundation.css') ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/checkpass/passTest.js') ?>"></script>
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li><img src="logo.png " style="width:135px;height:75px; "></li>
                <li><input type="search" placeholder="Search Here" style="margin-left:15px;width:450px;" ;></li>
                <li><button type="button" class="button">Search</button></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <img class="thumbnail " data-open="exampleModal1" src="profile.jpg ">
            <div class="large reveal" id="exampleModal1" data-reveal aria-hidden="true" role="dialog">
                <div style="float: right;">
                    <h2>Connexion</h2>
                    <form>
                        <div class="row">
                            <div class="small-8 columns">
                                <div class="row">
                                    <div class="small-3 columns">
                                        <label>Pseudo</label>
                                        <input type="text" id="right-label" placeholder="pseudo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-8 columns">
                                <div class="row">
                                    <div class="small-3 columns">
                                        <label>Pass</label>
                                        <input type="text" id="right-label" placeholder="mot de passe">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="expanded button" type="submit">Submit</button>
                    </form>
                </div>
                <div style="float: left;">
                    <h2>Inscription</h2>
                    <?php echo $view['form']->start($form) ?>
                    <fieldset>
                            <div class="row">
                                <div class="large-4 columns">
                                    <label>Adresse mail</label>
                                  <?php echo $view['form']->widget($form['email']); ?>
                                </div>
                                <div class="medium-4 columns">
                                    <label>Date de naissance</label>
                                    <?php echo $view['form']->widget($form['birth']); ?>
                                </div>
                                <div class="large-4 columns">
                                    <label>Avatar</label>
                                    <label for="exampleFileUpload" class="button">Upload File</label>
                                    <input type="file" id="exampleFileUpload" class="show-for-sr">
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4 columns">
                                    <label>Pseudo</label>
                                  <?php echo $view['form']->widget($form['name']); ?>
                                   </div>
                                <div class="large-4 columns">
                                    <label>Mot de passe</label>
                                    <input type="password" id="user_plainPassword_first" name="user[plainPassword][first]" onkeyup="checkPassImg(); return false;" required="required">
                                </div>
                                <div class="large-4 columns">
                                    <label>Confirmez mot de passe</label>
                                    <input type="password" id="user_plainPassword_second" name="user[plainPassword][second]" onkeyup="checkPassImg(); return false;" required="required">
                                    <i id="confirmMessageImg"></i>
                                </div>
                            </div>
                        </fieldset>
                        <button class="expanded button" type="submit">Submit</button>
                        <input type="hidden" id="user__token" name="user[_token]" value="XLYfo3jk_CjkGtG7V_I0NIXkbCmaEBqwAqKOeU8E0vU">
                  </form>
              </div>
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      </div>

    <ul class="tabs " data-tabs id="tabs_example ">
        <li class="tabs-title "><a href="#tab2">Vidéastes</a></li>
        <li class="tabs-title "><a href="#tab3 ">Chaînes</a></li>
        <li class="tabs-title "><a href="#tab4 ">Actualité</a></li>
        <li class="tabs-title "><a href="#tab5 ">Abonnements</a></li>
        <li class="tabs-title is-active "><a href="#tab1">Tendances</a></li>
    </ul>

    <div class="tabs-content " data-tabs-content="tabs_example ">

        <!------------------------------------------------------------Section Tendances---------------------------->
        <div class="tabs-panel is-active " id="tab1">
            <table>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="squeezie.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <font size="2" href="#" class="titres">MON NOUVEAU METIER...</font><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">1 234 992 vues -</font>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="wtc.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">530 231 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="atlas.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues -</font>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="squeezie.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">1 234 992 vues - -</font>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="wtc.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">61 244 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="atlas.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues -</font>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="squeezie.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">1 234 992 vues -</font>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="atlas.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues -</font>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!------------------------------------------------------------Section Vidéastes---------------------------->

        <div class="tabs-panel " id="tab2">
            <table>
                <th>
                    <h4>Antoine Daniel</h4>
                </th>
                <tr>
                    <td>
                        <div class="thumbnail ">
                            <img style="height:125px;width:125px;" src="profile.jpg " alt="Media Object ">
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <img src="wtc.jpg " style="height:75px;width:125px;" class="channel">
                        <label for="channel">What the Cut ?!</label>
                    </td>
                    <td>
                        <img src="wtc.jpg " style="height:75px;width:125px;" class="channel">
                        <label for="channel">La Mezzanine</label>
                    </td>
                </tr>
            </table>
            <table>
                <th>
                    <h4>Joueur du Grenier</h4>
                </th>
                <tr>
                    <td>
                        <div class="thumbnail ">
                            <img style="height:125px;width:125px;" src="profile.jpg " alt="Media Object ">
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <img src="wtc.jpg " style="height:75px;width:125px;" class="channel">
                        <label for="channel">What the Cut ?!</label>
                    </td>
                    <td>
                        <img src="wtc.jpg " style="height:75px;width:125px;" class="channel">
                        <label for="channel">La Mezzanine</label>
                    </td>
                </tr>
            </table>
            <table>
                <th>
                    <h4>Squeezie</h4>
                </th>
                <tr>
                    <td>
                        <div class="thumbnail ">
                            <img style="height:125px;width:125px;" src="profile.jpg " alt="Media Object ">
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <img src="wtc.jpg " style="height:75px;width:125px;" class="channel">
                        <label for="channel">What the Cut ?!</label>
                    </td>
                    <td>
                        <img src="wtc.jpg " style="height:75px;width:125px;" class="channel">
                        <label for="channel">La Mezzanine</label>
                    </td>
                </tr>
            </table>
        </div>

        <div class="tabs-panel " id="tab3 ">
            <p>Third Player</p>
            <p>Shane Warne</p>
        </div>
        <div class="tabs-panel " id="tab4 ">
            <p>Fourth Player</p>
            <p>Shaun Pollock</p>
        </div>
        <div class="tabs-panel " id="tab5 ">
            <p>Five Player</p>
            <p>Adam Gilchrist</p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>

</html>