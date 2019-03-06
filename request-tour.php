<?php include 'header.php';?>




<div class="row mt-5 mb-5">
<!-- start row -->
<div class="col-sm-2"></div>


<div class="col-sm-8">  <!-- start content of Rquest Tour -->

<form class="form" action="" method="POST">

<div class="row">
<div class=" col-sm-12 col-md-4 mb-2">
      <select  name="gender_type" class="form-control">
        <option selected value='mr'> Mr </option>
        <option value='mrs' > Mrs</option>
        <option value='miss' > Miss</option>
      </select>
      </div>
   <div class=" col-sm-12 col-md-4 mb-2">
     <input type="text" class="form-control"  required name="fname"  placeholder=" *Your First Name">
   </div>

   <div class=" col-sm-12 col-md-4 mb-2">
     <input type="text" class="form-control"  required name="lname"  placeholder=" *Your Last Name">
   </div>

   
 </div>


 <div class="row">
<div class=" col-sm-12 col-md-4 mb-2">
      <select name="country_name"  class="form-control">       
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania" >Albania</option>
            <option value="Albania" >Albania</option>
            <option value="Andorra" >Andorra</option>
            <option value="Angola" >Angola</option>
            <option value="Anguilla" >Anguilla</option>
            <option value="Argentina" >Argentina</option>
            <option value="Armenia" >Armenia</option>
            <option value="Australia">Australia</option>
            <option value="Austria" >Austria</option>
            <option value="Azerbaijan" >Azerbaijan</option>
            <option value="Bahamas" >Bahamas</option>
            <option value="Bahrain" >Bahrain</option>
            <option value="Bangladesh"  > Bangladesh</option>
            <option value="Barbados"  >Barbados</option>
            <option value="Belarus"  >Belarus</option>
            <option value="Belgium"  >Belgium</option>
            <option value="Belize"  >Belize</option>
            <option value="Benin"  >Benin</option>
            <option value="Bermuda"  >Bermuda</option>
            <option value="Bhutan"  >Bhutan</option>
            <option value="Bolivia"  >Bolivia</option>
            <option value="Bosnia"  >Bosnia</option>
            <option value="Botswana"  >Botswana</option>
            <option value="BouvetIsland"  >BouvetIsland</option>
            <option value="Brazil"  >Brazil</option>
            
            <option value="Brunei" >Brunei</option>
            <option value="Bulgaria" > Bulgaria</option>
            <option value="BurkinaFaso"  >BurkinaFaso</option>
            <option value="Burundi" >Burundi</option>
            <option value="Cambodia"  >Cambodia</option>
            <option value="Cameroon" >Cameroon</option>
            <option value="Canada" >Canada</option>
            <option value="CanaryIslands"  >CanaryIslands</option>
            <option value="CapeVerde"  >CapeVerde</option>
            <option value="CaymanIslands"  >CaymanIslands</option>
            <option value="CentralAfricanRepublic"  >CentralAfricanRepublic</option>
            <option value="CeutaMelilla"  >CeutaMelilla</option>
            <option value="Chad"  >Chad</option>
            <option value="Chile"  >Chile</option>
            <option value="China"  >China</option>
            <option value="ChristmasIsland"  >ChristmasIsland</option>
            <option value="ClippertonIsland"  >ClippertonIsland</option>
            <option>Cocos Islands</option>
            <option>Colombia</option>
            <option>Comoros</option>
            <option>Congo</option>
            <option>CostaRica</option>
            <option>Croatia</option>
            <option>Cuba</option>
            <option>Cyprus</option>
            <option>CzechRepublic</option>
            <option>Denmark</option>
            <option>Djibouti</option>
            <option>Dominica</option>
            <option>DominicanRepublic</option>
            <option>Ecuador</option>
            <option>Egypt</option>
            <option>ElSalvador</option>
            <option>EquatorialGuinea</option>
            <option>Eritrea</option>
            <option>Estonia(Eesti)</option>
            <option>Ethiopia</option>
            <option>Fiji</option>
            <option>Finland</option>
            <option>France</option>
            <option>Gabon</option>
            <option>Gambia</option>
            <option>Georgia</option>
            <option>Germany</option>
            <option>Ghana</option>
            <option>Greece</option>
            <option>Guatemala</option>
            <option>Guinea</option>
            <option>Guinea-Bissau</option>
            <option>Haiti</option>
            <option>Honduras</option>
            <option>HongKong</option>
            <option>Hungary</option>
            <option>Iceland</option>
            <option>India</option>
            <option>Indonesia</option>
            <option>Iran</option>
            <option>Iraq</option>
            <option>Ireland</option>
            <option>Israel</option>
            <option>Italy</option>
            <option>Jamaica</option>
            <option>Japan</option>
            <option>Jordan</option>
            <option>Kazakhstan</option>
            <option>Kenya</option>
            <option>Kosovo</option>
            <option>Kuwait</option>
            <option>Kyrgyzstan</option>
            <option>Laos</option>
            <option>Latvia</option>
            <option>Lebanon</option>
            <option>Lesotho</option>
            <option>Liberia</option>
            <option>Libya</option>
            <option>Lithuania</option>
            <option>Luxembourg</option>
            <option>Macau</option>
            <option>Macedonia</option>
            <option>Madagascar</option>
            <option>Malawi</option>
            <option>Malaysia</option>
            <option>Maldives</option>
            <option>Mali</option>
            <option>Malta</option>
            <option>Martinique</option>
            <option>Mauritania</option>
            <option>Mauritius</option>
            <option>Mexico</option>
            <option>Micronesia</option>
            <option>Moldova</option>
            <option>Monaco</option>
            <option>Mongolia</option>
            <option>Montenegro</option>
            <option>Montserrat</option>
            <option>Morocco</option>
            <option>Mozambique</option>
            <option>Myanmar</option>
            <option>Namibia</option>
            <option>Nepal</option>
            <option>Netherlands</option>
            <option>NewCaledonia</option>
            <option>NewZealand</option>
            <option>Nicaragua</option>
            <option>Niger</option>
            <option>Nigeria</option>
            <option>NorthKorea</option>
            <option>Norway</option>
            <option>Oman</option>
            <option>Pakistan</option>
            <option>Palestine</option>
            <option>Panama</option>
            <option>Peru</option>
            <option>Philippines</option>
            <option>Poland</option>
            <option>Portugal</option>
            <option>PuertoRico</option>
            <option>Qatar</option>
            <option>Romania</option>
            <option>Russia</option>
            <option>Rwanda</option>
            <option>SanMarino</option>
            <option>SaudiArabia</option>
            <option>Senegal</option>
            <option>Serbia</option>
            <option>Seychelles</option>
            <option>SierraLeone</option>
            <option>Singapore</option>
            <option>Slovakia</option>
            <option>Slovenia</option>
            <option>Somalia</option>
            <option>SouthAfrica</option>
            <option>SouthKorea</option>
            <option>SouthSudan</option>
            <option>Spain</option>
            <option>SriLanka</option>
            <option>Sudan</option>
            <option>Suriname</option>
            <option>Sweden</option>
            <option>Switzerland</option>
            <option>Syria</option>
            <option>Taiwan</option>
            <option>Tajikistan</option>
            <option>Tanzania</option>
            <option>Thailand</option>
            <option>Timor-Leste</option>
            <option>Togo</option>
            <option>Tunisia</option>
            <option>Turkey</option>
            <option>Turkmenistan</option>
            <option>Uganda</option>
            <option>Ukraine</option>
            <option>UnitedArabEmirates</option>
            <option>UnitedKingdom</option>
            <option selected="">United States</option>
            <option>Uruguay</option>
            <option>Uzbekistan</option>
            <option>Venezuela</option>
            <option>Vietnam</option>
            <option>WesternSahara</option>
            <option>Yemen</option>
            <option>Zambia</option>
            <option>Zimbabwe</option>

      </select>
      </div>
   <div class=" col-sm-12 col-md-4 mb-2">
     <input type="text" class="form-control"  required name="fname"  placeholder=" *Your First Name">
   </div>

   <div class=" col-sm-12 col-md-4 mb-2">
     <input type="text" class="form-control"  required name="lname"  placeholder=" *Your Last Name">
   </div>

   
 </div>




 <div class="form-group   mx-sm-10 mt-2 mb-4">
   <textarea class="form-control  d-block "    required  name="text"   placeholder="* Your Request Here ..."  id="exampleFormControlTextarea1" rows="10" with="w-100"></textarea>
 </div>
   


<div  class="mb-2" style="direction:ltr;text-align:left;margin-left:18px;margin-top:-15px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

When you press Send You Agree And Accept The </font></font><a href="https://web.archive.org/web/20180214164203/http://www.egypttraveltips.com/egypt-64.html"><font color="#0404B4"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">policies</font></font></b></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> and   </font></font><a href="https://web.archive.org/web/20180214164203/http://www.egypttraveltips.com/egypt-65.html"><font color="#0404B4"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">terms of the</font></font></b></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Site 

</font></font></div>

<div class="d-flex justify-content-end" >
* Please fill in all required form fields, thanks!
</div>
 <button type="submit" class="btn btn-primary btn-lg main-border-raduis  mb-2">Send</button>

</form>








</div><!-- End content of Rquest Tour -->

<div class="col-sm-2"></div>


</div><!-- End row -->











<?php include 'footer.php';?>













