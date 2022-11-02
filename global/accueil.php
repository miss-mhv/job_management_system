<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/08/2017
 * Time: 12:14
 */

?>
<div id="h3-acueil">
    <h3>
        Devenez membre du cabinet JMN Constant
    </h3>
</div>
<section id="dg-container" class="dg-container" style="">
    <div class="dg-wrapper">
        <a href="#"><img src="libs/images/slide_accueil/logo_JMN3.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_1.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_2.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_3.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_4.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_5.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_6.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_7.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_8.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_9.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_10.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_11.jpg" alt="image01">
            <div>Les zones d'intervetnion du cabinet JMN Consultant</div>
        </a>
        <a href="#"><img src="libs/images/slide_accueil/photo_12.jpg" alt="image01">
            <div>JMN Consultant, Votre partenaire pour le Developpement durable en Afrique Centrale!</div>
        </a>
    </div>
    <nav>
        <span class="dg-prev">&lt;</span>
        <span class="dg-next">&gt;</span>
    </nav>
</section>
<div class="mdl-grid" style="margin-top: -200px; background-color: #F6F6F6">
    <div class="mdl-cell--12-col">
        <a href="http://jmnconsultant.fr/" style="color: #424242" >
            <div class="mdl-cell--10-col">
                <p>
                <h6>Bienvenue dans la plateforme de recrutement du cabinet JMN Consultant. Accédez au site web du cabinet...</h6>
                </p>
            </div>
            <div class="mdl-cell--2-col" style="float: right; cursor: pointer; position: relative; top: -60px;" >
                <div id="div1" class="fa" >
                </div>
            </div>
        </a>
    </div>

</div>
<script>
    function smile() {
        var a;
        a = document.getElementById("div1");
        a.innerHTML = "&#xf061;";
        a.style.color = "#1565c0";
        a.style.fontSize ="36px";
        setTimeout(function () {
            a.style.color = "#81c784";
            a.innerHTML = "&#xf061;";
        }, 2000);
    }
    smile();
    setInterval(smile, 4000);
</script>
<script type="text/javascript">
    $(function() {
        $('#dg-container').gallery({
            autoplay	:	true
        });
    });
</script/>